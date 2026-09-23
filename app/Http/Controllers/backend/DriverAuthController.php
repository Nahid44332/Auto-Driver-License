<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DriverAuthController extends Controller
{
     public function driversRegister()
    {
        return view('Frontend.register');
    }
 public function register(Request $request)
    {
        // ব্লেডের ইনপুট নেম অনুযায়ী ভ্যালিডেশন
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15|unique:drivers,mobile', // ব্লেডে name="phone"
            'nid' => 'required|string|max:20|unique:drivers,nid_number', // ব্লেডে name="nid"
            'vehicle_type' => 'required|string',
            'vehicle_no' => 'required|string|unique:drivers,vehicle_number', // ব্লেডে name="vehicle_no"
            'password' => 'required|string|min:6',
        ]);

        // ডাটাবেজ কলামে সঠিক ডেটা ইনসার্ট করা
        $driver = Driver::create([
            'name' => $request->name,
            'mobile' => $request->phone,          // phone থেকে mobile এ সেভ হবে
            'nid_number' => $request->nid,        // nid থেকে nid_number এ সেভ হবে
            'vehicle_type' => $request->vehicle_type,
            'vehicle_number' => $request->vehicle_no, // vehicle_no থেকে vehicle_number এ সেভ হবে
            'password' => Hash::make($request->password),
            'status' => 'Unapplied',
        ]);

        return redirect()->route('driver.login')->with('success', 'রেজিস্ট্রেশন সফল হয়েছে');
    }

public function loginSubmit(Request $request)
{
    // ১. প্রথমে ভ্যালিডেশন করে নাও
    $request->validate([
        'login_id' => 'required|string',
        'password' => 'required|string',
    ]);

    // ২. মোবাইল বা NID দিয়ে লগইন করার জন্য ক্রিন্ডেনশিয়াল তৈরি
    // যেহেতু ডাটাবেজে কলামের নাম 'mobile', তাই mobile বা nid দিয়ে চেক করতে হবে
    $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile'; 
    // অথবা যদি শুধু মোবাইল নম্বর দিয়ে লগইন হয়:
    
    $credentials = [
        'mobile' => $request->login_id, // অথবা 'nid_number' যদি NID দিয়ে লগইন করতে চাও
        'password' => $request->password,
    ];

    // ৩. চেক করো ইউজার 'Unapplied' বা অন্য স্ট্যাটাসে আছে কি না বা সফলভাবে লগইন হয় কি না
    if (Auth::guard('driver')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('driver.dashboard')->with('success', 'লগইন সফল হয়েছে!');
    }

    // যদি লগইন ফেল করে
    return back()->withErrors([
        'login_id' => 'প্রদত্ত তথ্য ভুল রয়েছে। দয়া করে সঠিক মোবাইল নম্বর ও পাসওয়ার্ড দিন।',
    ])->withInput();
}

public function logout(Request $request)
{
    // ড্রাইভার গার্ড দিয়ে লগআউট করা হচ্ছে
    Auth::guard('driver')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // লগআউটের পর রিডাইরেক্ট (যেমন: লগইন পেজে)
    return redirect()->route('driver.login')->with('success', 'সফলভাবে লগআউট হয়েছে!');
}
}
