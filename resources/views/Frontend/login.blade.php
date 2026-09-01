@extends('Frontend.master')

@section('content')
<div class="min-h-[85vh] bg-[#1B4D44] py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden flex items-center justify-center">
    
    <!-- ব্যাকগ্রাউন্ড গ্লো ইফেক্ট -->
    <div class="absolute inset-0 -z-10 pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-[#113831] rounded-full opacity-40 blur-[130px]"></div>
    </div>

    <div class="max-w-md w-full">
        
        <!-- Main Login Card -->
        <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-3xl shadow-2xl p-8 sm:p-10 relative overflow-hidden">
            
            <!-- Top Icon -->
            <div class="absolute -top-8 left-1/2 -translate-x-1/2">
                <div class="bg-[#166534] border-4 border-[#12362F] rounded-2xl p-3 shadow-lg text-white">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                    </svg>
                </div>
            </div>

            <div class="text-center mt-6 mb-8">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-2">
                    অ্যাকাউন্টে লগইন করুন
                </h2>
                <p class="text-xs sm:text-sm text-slate-300">
                    আপনার ডিজিটাল লাইসেন্স ও ড্যাশবোর্ড অ্যাক্সেস করতে তথ্য দিন।
                </p>
            </div>

            <!-- Login Form -->
            <form action="#" method="POST" class="space-y-4">
                @csrf
                
                <!-- Mobile Number / License No -->
                <div>
                    <label class="block text-xs font-medium text-slate-200 mb-1 px-1">মোবাইল নম্বর বা লাইসেন্স নম্বর</label>
                    <input type="text" name="login_id" required
                        class="w-full px-4 py-3 bg-[#0D2924] border border-white/15 rounded-xl text-white text-sm placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 transition"
                        placeholder="আপনার মোবাইল বা লাইসেন্স নম্বর">
                </div>

                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between mb-1 px-1">
                        <label class="block text-xs font-medium text-slate-200">পাসওয়ার্ড</label>
                        <a href="#" class="text-[11px] text-emerald-400 hover:underline">পাসওয়ার্ড ভুলে গেছেন?</a>
                    </div>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 bg-[#0D2924] border border-white/15 rounded-xl text-white text-sm placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 transition"
                        placeholder="••••••••">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full mt-2 flex justify-center items-center px-6 py-3.5 border border-transparent text-base font-bold rounded-xl text-gray-900 bg-[#f59e0b] hover:bg-[#d97706] transition shadow-lg shadow-yellow-950/30">
                    লগইন করুন
                </button>
            </form>

            <!-- Register Redirect Link -->
            <div class="text-center text-xs text-slate-300 mt-6">
                কোনো অ্যাকাউন্ট নেই? 
                <a href="{{ url('register') }}" class="text-emerald-400 font-bold hover:underline">রেজিস্ট্রেশন করুন</a>
            </div>

            <!-- Footer Text -->
            <div class="text-center text-[11px] text-slate-400 mt-6 pt-4 border-t border-white/10">
                © copyright © 2026 License BD - অটো লাইসেন্স বিডি
            </div>

        </div>
    </div>
</div>
@endsection