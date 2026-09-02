@extends('Frontend.master')

@section('content')
<div class="min-h-[85vh] bg-[#1B4D44] py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden flex items-center justify-center">
    
    <!-- ব্যাকগ্রাউন্ড গ্লো ইফেক্ট -->
    <div class="absolute inset-0 -z-10 pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-[#113831] rounded-full opacity-40 blur-[130px]"></div>
    </div>

    <div class="max-w-md w-full">
        
        <!-- Main Admin Login Card -->
        <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-3xl shadow-2xl p-8 sm:p-10 relative overflow-hidden">
            
            <!-- Top Admin Shield/Lock Icon -->
            <div class="absolute -top-2 left-1/2 -translate-x-1/2">
                <div class="bg-emerald-600 border-4 border-[#12362F] rounded-2xl p-3 shadow-lg text-white">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
            </div>

            <div class="text-center mt-6 mb-8">
                <span class="bg-red-500/20 border border-red-500/30 text-red-300 text-[10px] font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
                    বাজেট ও নিয়ন্ত্রণ প্যানেল
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mt-2 mb-1">
                    এডমিন লগইন
                </h2>
                <p class="text-xs sm:text-sm text-slate-300">
                    অটো লাইসেন্স সিস্টেম পরিচালনার জন্য অ্যাডমিনিস্ট্রেটর এক্সেস।
                </p>
            </div>

            <!-- Admin Login Form -->
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                
                <!-- Admin Email / Username -->
                <div>
                    <label class="block text-xs font-medium text-slate-200 mb-1 px-1">এডমিন ইমেইল বা ইউজারনেম</label>
                    <input type="text" name="email" required
                        class="w-full px-4 py-3 bg-[#0D2924] border border-white/15 rounded-xl text-white text-sm placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 transition"
                        placeholder="admin@autolicense.gov.bd">
                </div>

                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between mb-1 px-1">
                        <label class="block text-xs font-medium text-slate-200">সিক্রেট পাসওয়ার্ড</label>
                    </div>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 bg-[#0D2924] border border-white/15 rounded-xl text-white text-sm placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 transition"
                        placeholder="••••••••••••">
                </div>

                <!-- Remember Me Checkbox -->
                <div class="flex items-center justify-between text-xs px-1">
                    <label class="flex items-center text-slate-300 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded bg-[#0D2924] border-white/20 text-emerald-600 focus:ring-0 mr-2">
                        <span>আমাকে মনে রাখুন</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full mt-2 flex justify-center items-center px-6 py-3.5 border border-transparent text-base font-bold rounded-xl text-gray-900 bg-[#f59e0b] hover:bg-[#d97706] transition shadow-lg shadow-yellow-950/30">
                    প্রবেশ করুন
                </button>
            </form>

            <!-- Back to Home Link -->
            <div class="text-center text-xs text-slate-300 mt-6">
                মূল ওয়েবসাইটে ফিরে যেতে চান? 
                <a href="{{url('/')}}" class="text-emerald-400 font-bold hover:underline">হোম পেজ</a>
            </div>

            <!-- Footer Text -->
            <div class="text-center text-[11px] text-slate-400 mt-6 pt-4 border-t border-white/10">
                © copyright © 2026 License BD - Secure Admin Portal
            </div>

        </div>
    </div>
</div>
@endsection