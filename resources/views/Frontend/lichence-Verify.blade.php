@extends('Frontend.master')

@section('content')
<div class="min-h-[85vh] bg-[#1B4D44] flex items-center justify-center py-8 px-4 relative overflow-hidden">
    
    <!-- ব্যাকগ্রাউন্ড গ্লো ইফেক্ট -->
    <div class="absolute inset-0 -z-10 pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-[#113831] rounded-full opacity-40 blur-[100px]"></div>
    </div>

    <div class="max-w-xl w-full">
        
        <!-- Main Verification Card -->
        <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl shadow-2xl p-6 sm:p-8 relative overflow-hidden">
            
            <!-- Top Icon -->
            <div class="absolute -top-1 left-1/2 -translate-x-1/2">
                <div class="bg-[#166534] border-4 border-[#12362F] rounded-xl p-3 shadow-lg text-white">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <div class="text-center mt-6 mb-6">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-1">
                    লাইসেন্স নম্বর দিন
                </h2>
                <p class="text-sm text-slate-300">
                    আপনার স্মার্ট ডিজিটাল লাইসেন্স বা কিউআর কোড যাচাই করুন।
                </p>
            </div>

            <!-- Input Form -->
            <form action="#" method="GET" class="space-y-4 mb-6">
                <div>
                    <label for="license_no" class="block text-xs font-medium text-slate-200 mb-1 px-1">
                        লাইসেন্স নম্বর
                    </label>
                    <div class="relative">
                        <input type="text" id="license_no" name="license_no" required
                            class="w-full px-4 py-3 bg-[#0D2924] border border-white/15 rounded-xl text-white text-base placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 transition"
                            placeholder="যেমন: GZP-2026-0012">
                        <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 p-2 text-slate-400 hover:text-emerald-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <button type="submit"
                    class="w-full flex justify-center items-center px-6 py-3 border border-transparent text-base font-bold rounded-xl text-gray-900 bg-[#f59e0b] hover:bg-[#d97706] transition shadow-md">
                    যাচাই করুন
                </button>
            </form>

            {{-- <!-- Result Box -->
            <div id="result-box" class="bg-[#0A221E] border border-emerald-500/40 rounded-xl p-4">
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 bg-emerald-600/30 p-2 rounded-full border border-emerald-500/30">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    
                    <div class="flex-grow">
                        <div class="flex items-center justify-between">
                            <h3 class="text-base font-bold text-emerald-400">
                                লাইসেন্সটি বৈধ (Active)
                            </h3>
                            <span class="bg-emerald-500/20 text-emerald-300 text-[10px] font-mono px-2 py-0.5 rounded-full border border-emerald-500/30">
                                #VALID
                            </span>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-x-4 gap-y-2 mt-3 text-slate-300 text-xs">
                            <p>
                                <span class="block text-slate-400">চালকের নাম:</span> 
                                <span class="font-semibold text-white">মো. রফিকুল ইসলাম</span>
                            </p>
                            <p>
                                <span class="block text-slate-400">গাড়ির ধরন:</span> 
                                <span class="font-semibold text-white">ইজি বাইক</span>
                            </p>
                            <p>
                                <span class="block text-slate-400">এলাকা:</span> 
                                <span class="font-semibold text-white">গাজীপুর সদর</span>
                            </p>
                            <p>
                                <span class="block text-slate-400">মেয়াদ উত্তীর্ণ:</span> 
                                <span class="font-semibold text-white">৩১ ডিসেম্বর ২০২৬</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Footer Text -->
            <div class="text-center text-[11px] text-slate-400 mt-6 pt-4 border-t border-white/10">
                © copyright © 2026 License BD - অটো লাইসেন্স বিডি
            </div>

        </div>
    </div>
</div>
@endsection