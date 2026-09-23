@extends('backend.driver.master')
@section('content')
      <div class="max-w-5xl mx-auto space-y-6">
                
                @php
                    // প্রোফাইল কমপ্লিশন চেক লজিক
                    $isProfileComplete = !empty($driver->nid_number) && !empty($driver->father_name) && !empty($driver->vehicle_number);
                    $profilePercentage = $isProfileComplete ? 100 : 60;
                @endphp

                <!-- ⚠️ Profile Completion Alert -->
                @if(!$isProfileComplete)
                <div class="bg-amber-50 border border-amber-200 rounded-2xl p-5 sm:p-6 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-sm">
                    <div class="flex items-center gap-4 text-center sm:text-left">
                        <div class="w-12 h-12 bg-amber-100 text-amber-700 rounded-2xl flex items-center justify-center shrink-0 font-bold text-xl">
                            ⚠️
                        </div>
                        <div>
                            <h2 class="text-base font-bold text-amber-900">আপনার প্রোফাইল সম্পন্ন করুন ({{ $profilePercentage }}% সম্পন্ন)</h2>
                            <p class="text-xs text-amber-700 mt-0.5">জাতীয় পরিচয়পত্র ও গাড়ির সঠিক তথ্য দিয়ে প্রোফাইল ১০০% সম্পন্ন না করলে লাইসেন্সের জন্য আবেদন করতে পারবেন না।</p>
                        </div>
                    </div>
                    <a href="#" class="px-5 py-2.5 bg-amber-600 hover:bg-amber-700 text-white text-xs font-bold rounded-xl shadow transition whitespace-nowrap">
                        প্রোফাইল আপডেট করুন
                    </a>
                </div>
                @else
                <!-- ✅ Profile Complete Success Notice -->
                <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-4 sm:p-5 flex items-center justify-between gap-4 shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-emerald-100 text-emerald-700 rounded-xl flex items-center justify-center font-bold">
                            ✓
                        </div>
                        <div>
                            <h2 class="text-sm font-bold text-emerald-900">আপনার প্রোফাইল ১০০% সম্পন্ন হয়েছে!</h2>
                            <p class="text-xs text-emerald-700">এখন আপনি যেকোনো সময় লাইসেন্সের জন্য আবেদন করতে পারবেন।</p>
                        </div>
                    </div>
                    <span class="px-3 py-1 bg-emerald-200 text-emerald-800 text-xs font-bold rounded-full">যাচাইকৃত</span>
                </div>
                @endif

                <!-- Top Welcome Banner -->
                <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-4 text-center sm:text-left">
                        <div class="w-14 h-14 bg-emerald-50 border border-emerald-200 rounded-2xl flex items-center justify-center text-emerald-700 text-2xl font-bold">
                            {{ substr($driver->name, 0, 1) }}
                        </div>
                        <div>
                            <h1 class="text-xl font-extrabold text-gray-800">স্বাগতম, {{ $driver->name }}!</h1>
                            <p class="text-xs text-gray-500">আপনার ড্রাইভার প্যানেল থেকে সকল কার্যক্রম পরিচালনা করুন।</p>
                        </div>
                    </div>

                    <!-- Status Badge -->
                    <div>
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold tracking-wide uppercase 
                            {{ $driver->status == 'Active' ? 'bg-emerald-100 text-emerald-800 border border-emerald-200' : 'bg-amber-100 text-amber-800 border border-amber-200' }}">
                            স্ট্যাটাস: {{ $driver->status }}
                        </span>
                    </div>
                </div>

                <!-- Stats / Info Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Vehicle Information Card -->
                    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                        <h3 class="text-sm font-bold text-gray-800 mb-4 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                            গাড়ির তথ্য
                        </h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex justify-between py-1.5 border-b border-gray-50">
                                <span class="text-gray-500">গাড়ির ধরন:</span>
                                <span class="text-gray-800 font-semibold capitalize">{{ str_replace('_', ' ', $driver->vehicle_type) }}</span>
                            </div>
                            <div class="flex justify-between py-1.5 border-b border-gray-50">
                                <span class="text-gray-500">ভেহিকেল নম্বর:</span>
                                <span class="text-gray-800 font-semibold">{{ $driver->vehicle_number ?? 'যুক্ত করা হয়নি' }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Personal & NID Card -->
                    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                        <h3 class="text-sm font-bold text-gray-800 mb-4 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                            ব্যক্তিগত ও এনআইডি তথ্য
                        </h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex justify-between py-1.5 border-b border-gray-50">
                                <span class="text-gray-500">মোবাইল নম্বর:</span>
                                <span class="text-gray-800 font-semibold">{{ $driver->mobile }}</span>
                            </div>
                            <div class="flex justify-between py-1.5 border-b border-gray-50">
                                <span class="text-gray-500">এনআইডি নম্বর:</span>
                                <span class="text-gray-800 font-semibold">{{ $driver->nid_number ?? 'সংরক্ষিত নেই' }}</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- License Application Section (Conditional Based on Profile) -->
                <div class="bg-gradient-to-r from-emerald-800 to-emerald-900 border border-emerald-900 rounded-2xl shadow-md p-6 sm:p-8 text-white flex flex-col sm:flex-row items-center justify-between gap-6">
                    <div>
                        <h3 class="text-lg font-bold mb-1">স্মার্ট ডিজিটাল লাইসেন্স আবেদন</h3>
                        <p class="text-xs sm:text-sm text-emerald-100">
                            @if($isProfileComplete)
                                আপনার প্রোফাইল সম্পূর্ণ। এখন লাইসেন্সের জন্য আবেদন করতে নিচের বাটনে ক্লিক করুন।
                            @else
                                লাইসেন্সের জন্য আবেদন করতে আগে আপনার প্রোফাইল ১০০% সম্পন্ন করুন।
                            @endif
                        </p>
                    </div>

                    @if($isProfileComplete)
                        <a href="#" class="px-6 py-3 bg-white text-emerald-900 font-bold rounded-xl hover:bg-emerald-50 transition text-xs sm:text-sm whitespace-nowrap shadow">
                            লাইসেন্সের জন্য আবেদন করুন
                        </a>
                    @else
                        <button disabled class="px-6 py-3 bg-gray-700/60 text-gray-300 font-bold rounded-xl cursor-not-allowed text-xs sm:text-sm whitespace-nowrap shadow">
                            আবেদন বন্ধ (প্রোফাইল অসম্পূর্ণ)
                        </button>
                    @endif
                </div>

            </div>
@endsection