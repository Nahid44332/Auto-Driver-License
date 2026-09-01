@extends('Frontend.master')

@section('content')
<div class="min-h-[85vh] bg-[#1B4D44] py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden flex items-center justify-center">
    
    <!-- ব্যাকগ্রাউন্ড গ্লো ইফেক্ট -->
    <div class="absolute inset-0 -z-10 pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-[#113831] rounded-full opacity-40 blur-[130px]"></div>
    </div>

    <div class="max-w-xl w-full">
        
        <!-- Main Register Card -->
        <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-3xl shadow-2xl p-8 sm:p-10 relative overflow-hidden">
            
            <!-- Top Icon -->
            <div class="absolute -top-8 left-1/2 -translate-x-1/2">
                <div class="bg-[#166534] border-4 border-[#12362F] rounded-2xl p-3 shadow-lg text-white">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </div>
            </div>

            <div class="text-center mt-6 mb-8">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-2">
                    চালকের নতুন অ্যাকাউন্ট
                </h2>
                <p class="text-xs sm:text-sm text-slate-300">
                    স্মার্ট ডিজিটাল লাইসেন্স পাওয়ার জন্য আপনার সঠিক তথ্য দিয়ে রেজিস্ট্রেশন করুন।
                </p>
            </div>

            <!-- Registration Form -->
            <form action="#" method="POST" class="space-y-4">
                @csrf
                
                <!-- Full Name -->
                <div>
                    <label class="block text-xs font-medium text-slate-200 mb-1 px-1">চালকের পূর্ণ নাম</label>
                    <input type="text" name="name" required
                        class="w-full px-4 py-3 bg-[#0D2924] border border-white/15 rounded-xl text-white text-sm placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 transition"
                        placeholder="যেমন: মো. রফিকুল ইসলাম">
                </div>

                <!-- Mobile Number -->
                <div>
                    <label class="block text-xs font-medium text-slate-200 mb-1 px-1">মোবাইল নম্বর</label>
                    <input type="text" name="phone" required
                        class="w-full px-4 py-3 bg-[#0D2924] border border-white/15 rounded-xl text-white text-sm placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 transition"
                        placeholder="যেমন: 01700000000">
                </div>

                <!-- NID Number -->
                <div>
                    <label class="block text-xs font-medium text-slate-200 mb-1 px-1">জাতীয় পরিচয়পত্র (NID) নম্বর</label>
                    <input type="text" name="nid" required
                        class="w-full px-4 py-3 bg-[#0D2924] border border-white/15 rounded-xl text-white text-sm placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 transition"
                        placeholder="NID নম্বর বা স্মার্ট কার্ড নম্বর">
                </div>

                <!-- Vehicle Type & Number -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-medium text-slate-200 mb-1 px-1">গাড়ির ধরন</label>
                        <select name="vehicle_type" class="w-full px-4 py-3 bg-[#0D2924] border border-white/15 rounded-xl text-white text-sm focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 transition">
                            <option value="easy_bike" class="bg-[#0D2924]">ইজি বাইক</option>
                            <option value="auto_rickshaw" class="bg-[#0D2924]">অটোরিকশা</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-slate-200 mb-1 px-1">ভেহিকেল/গাড়ি নম্বর</label>
                        <input type="text" name="vehicle_no" required
                            class="w-full px-4 py-3 bg-[#0D2924] border border-white/15 rounded-xl text-white text-sm placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 transition"
                            placeholder="যেমন: GZP-1234">
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-xs font-medium text-slate-200 mb-1 px-1">পাসওয়ার্ড</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 bg-[#0D2924] border border-white/15 rounded-xl text-white text-sm placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 transition"
                        placeholder="কমপক্ষে ৬ ডিজিটের পাসওয়ার্ড">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full mt-2 flex justify-center items-center px-6 py-3.5 border border-transparent text-base font-bold rounded-xl text-gray-900 bg-[#f59e0b] hover:bg-[#d97706] transition shadow-lg shadow-yellow-950/30">
                    রেজিস্ট্রেশন সম্পন্ন করুন
                </button>
            </form>

            <!-- Login Redirect Link -->
            <div class="text-center text-xs text-slate-300 mt-6">
                ইতিমধ্যেই অ্যাকাউন্ট আছে? 
                <a href="#" class="text-emerald-400 font-bold hover:underline">লগইন করুন</a>
            </div>

            <!-- Footer Text -->
            <div class="text-center text-[11px] text-slate-400 mt-6 pt-4 border-t border-white/10">
                © copyright © 2026 License BD - অটো লাইসেন্স বিডি
            </div>

        </div>
    </div>
</div>
@endsection