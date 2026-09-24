<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class LicenseController extends Controller
{
    // লাইসেন্স আবেদনের প্রথম পেজ দেখানো
    public function showApplyForm()
    {
        $driver = Auth::guard('driver')->user();

        // চেক করা ড্রাইভারের প্রোফাইল ১০০% কমপ্লিট কি না
        if ($driver->is_profile_completed != 1) {
            return redirect()->route('driver.profile')->with('error', 'আগে আপনার প্রোফাইল ১০০% আপডেট করুন, তারপর লাইসেন্সের জন্য আবেদন করতে পারবেন।');
        }

        return view('backend.driver.license.apply', compact('driver'));
    }

    // ওটিপি জেনারেট ও পাঠানো (হোয়াটসঅ্যাপ নম্বরে)
    public function sendOtp(Request $request)
    {
        $driver = Auth::guard('driver')->user();

        $request->validate([
            'mobile' => 'required|string|max:15',
        ]);

        // ৬ ডিজিটের ওটিপি কোড তৈরি
        $otp = rand(100000, 999999);

        $driver->mobile = $request->mobile;
        $driver->otp_code = $otp;
        $driver->otp_expires_at = Carbon::now()->addMinutes(5); // ৫ মিনিট মেয়াদ
        $driver->is_otp_verified = 0;
        $driver->save();

        // TODO: এখানে WhatsApp API বা Twilio/Green-API দিয়ে ওটিপি পাঠানোর কোড বসাতে হবে। 
        // আপাতত লোকাল টেস্টের জন্য সেশনে বা ফ্লাশ ম্যাসেজে ওটিপি দেখিয়ে দিতে পারি বা কনসোলে রাখতে পারি।
        
        return redirect()->back()->with('success', 'আপনার WhatsApp নম্বরে ওটিপি পাঠানো হয়েছে। (টেস্ট ওটিপি: ' . $otp . ')');
    }

    // ওটিপি ভেরিফাই করা
    public function verifyOtp(Request $request)
    {
        $driver = Auth::guard('driver')->user();

        $request->validate([
            'otp_code' => 'required|string|size:6',
        ]);

        if ($driver->otp_code == $request->otp_code && Carbon::now()->lt($driver->otp_expires_at)) {
            $driver->is_otp_verified = 1;
            $driver->save();

            return redirect()->back()->with('success', 'ওটিপি সফলভাবে যাচাই হয়েছে! এখন সম্পূর্ণ আবেদন ধাপ সম্পন্ন করুন।');
        }

        return redirect()->back()->with('error', 'ভুল অথবা মেয়াদোত্তীর্ণ ওটিপি কোড!');
    }

    // পেমেন্ট ও TrxID সাবমিট করা
   public function submitPayment(Request $request)
{
    $driver = Auth::guard('driver')->user();

    $request->validate([
        'payment_method' => 'required|string',
        'trx_id' => 'required|string|max:50',
    ]);

    // যদি application_id না থাকে বা খালি থাকে, তবে জেনারেট করবে
    if (empty($driver->application_id)) {
        $driver->application_id = 'LIC-' . (1000 + $driver->id);
    }

    // পেমেন্ট তথ্য বা স্ট্যাটাস আপডেট (যদি ডেটাবেজে ফিল্ড থাকে সেভ করে নিও)
    $driver->status = 'Pending'; // বা পেমেন্ট সাবমিটেড
    $driver->save();

    // সরাসরি পিডিএফ বা স্লিপ রাউটে রিডাইরেক্ট করো
    return redirect()->route('driver.license.download.pdf')->with('success', 'পেমেন্ট ও আবেদন সফলভাবে জমা হয়েছে!');
}

    // আবেদনপত্র বা স্লিপ প্রিভিউ/ডাউনলোড
public function downloadPdf()
{
    $driver = Auth::guard('driver')->user();

    // যদি পেমেন্ট বা সাবমিট না করে থাকে
    if ($driver->status == 'Unapplied') {
        return redirect()->back()->with('error', 'আগে আবেদন সম্পন্ন করুন।');
    }

    return view('backend.driver.license.pdf_template', compact('driver'));
}
}
