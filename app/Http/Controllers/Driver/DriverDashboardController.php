<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverDashboardController extends Controller
{
    public function index()
    {
        // ড্রাইভারের ড্যাশবোর্ড পেজ রিটার্ন করা
        // তোমার ভিউ ফাইলের নাম যদি আলাদা হয়, তবে সেটি এখানে দিয়ে দিও (যেমন: driver.dashboard)
        
        $driver =Auth::guard('driver')->user();
        
        return view('backend.driver.dashboard', compact('driver'));
    }

    public function profile()
{
    $driver = Auth::guard('driver')->user();
    return view('backend.driver.profile', compact('driver'));
}

public function profileUpdate(Request $request)
{
    $driver = Auth::guard('driver')->user();

    $request->validate([
        'name' => 'required|string|max:255',
        'father_name' => 'nullable|string|max:255',
        'nid_number' => 'nullable|string|max:50',
        'date_of_birth' => 'nullable|date',
        'vehicle_type' => 'required|string',
        'vehicle_number' => 'nullable|string|max:50',
        'address' => 'nullable|string',
        'driver_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'nid_copy' => 'nullable|image|mimes:jpeg,png,jpg,pdf|max:4096',
    ]);

    // ড্রাইভারের সাধারণ তথ্য আপডেট
    $driver->name = $request->name;
    $driver->father_name = $request->father_name;
    $driver->nid_number = $request->nid_number;
    $driver->date_of_birth = $request->date_of_birth;
    $driver->vehicle_type = $request->vehicle_type;
    $driver->vehicle_number = $request->vehicle_number;
    $driver->address = $request->address;

    // ড্রাইভারের ছবি আপলোড হ্যান্ডেল করা
    if ($request->hasFile('driver_photo')) {
        // পুরোনো ছবি থাকলে ডিলিট করে দিতে পারিস
        if ($driver->driver_photo && file_exists(public_path($driver->driver_photo))) {
            unlink(public_path($driver->driver_photo));
        }
        $file = $request->file('driver_photo');
        $filename = time() . '_photo_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/drivers'), $filename);
        $driver->driver_photo = 'uploads/drivers/' . $filename;
    }

    // এনআইডি কপি আপলোড হ্যান্ডেল করা
    if ($request->hasFile('nid_copy')) {
        if ($driver->nid_copy && file_exists(public_path($driver->nid_copy))) {
            unlink(public_path($driver->nid_copy));
        }
        $file = $request->file('nid_copy');
        $filename = time() . '_nid_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/drivers'), $filename);
        $driver->nid_copy = 'uploads/drivers/' . $filename;
    }

    // ১০০% কমপ্লিশন চেক (ছবি ও এনআইডি কপি সহ)
    if (!empty($driver->name) && !empty($driver->father_name) && !empty($driver->nid_number) && !empty($driver->date_of_birth) && !empty($driver->vehicle_type) && !empty($driver->vehicle_number) && !empty($driver->address) && !empty($driver->driver_photo) && !empty($driver->nid_copy)) {
        $driver->is_profile_completed = 1;
    } else {
        $driver->is_profile_completed = 0;
    }

    $driver->save();

    return redirect()->back()->with('success', 'প্রোফাইল এবং ডকুমেন্টস সফলভাবে আপডেট করা হয়েছে!');
}
}
