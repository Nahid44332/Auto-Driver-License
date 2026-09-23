@extends('backend.master')
@section('content')
       <!-- Welcome Banner -->
            <div class="bg-white border-l-4 border-[#1B4D44] border-y border-r border-slate-200 rounded-xl p-5 sm:p-6 shadow-sm flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <span class="bg-emerald-50 text-[#1B4D44] border border-emerald-200 text-[10px] font-bold px-3 py-1 rounded uppercase tracking-wider">
                        অফিসিয়াল ড্যাশবোর্ড
                    </span>
                    <h2 class="text-xl sm:text-2xl font-extrabold text-slate-800 tracking-tight mt-2">
                        স্বাগতম, {{ Auth::user()->name ?? 'এডমিন মহোদয়' }}! 🏛️
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">
                        গাজীপুর জেলা অটো লাইসেন্স নিয়ন্ত্রণ বোর্ডের কেন্দ্রীয় মনিটরিং প্যানেল।
                    </p>
                </div>
                <div>
                    <button class="px-4 py-2.5 bg-[#1B4D44] hover:bg-[#143a33] text-white text-xs font-bold rounded-lg transition shadow flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        নতুন নোটিশ জারি করুন
                    </button>
                </div>
            </div>

            <!-- Metric Cards (Stats) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm border-t-4 border-t-[#1B4D44]">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-semibold text-slate-500">মোট নিবন্ধিত চালক</p>
                            <h3 class="text-2xl font-black text-slate-800 mt-1">১,৪৮২ জন</h3>
                        </div>
                        <div class="p-3 bg-emerald-50 text-[#1B4D44] rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                    </div>
                    <p class="mt-3 text-[11px] text-emerald-700 font-bold bg-emerald-50 inline-block px-2 py-0.5 rounded">↑ ১২% বৃদ্ধি পেয়েছে</p>
                </div>

                <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm border-t-4 border-t-blue-600">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-semibold text-slate-500">সক্রিয় লাইসেন্স</p>
                            <h3 class="text-2xl font-black text-slate-800 mt-1">১,৩১০ টি</h3>
                        </div>
                        <div class="p-3 bg-blue-50 text-blue-600 rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                    </div>
                    <p class="mt-3 text-[11px] text-blue-700 font-bold bg-blue-50 inline-block px-2 py-0.5 rounded">যাচাইকৃত ও অনুমোদিত</p>
                </div>

                <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm border-t-4 border-t-amber-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-semibold text-slate-500">অপেক্ষমাণ আবেদন</p>
                            <h3 class="text-2xl font-black text-amber-600 mt-1">১১২ টি</h3>
                        </div>
                        <div class="p-3 bg-amber-50 text-amber-600 rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                    </div>
                    <p class="mt-3 text-[11px] text-amber-700 font-bold bg-amber-50 inline-block px-2 py-0.5 rounded">অনুমোদনের অপেক্ষায়</p>
                </div>

                <div class="bg-white border border-slate-200 rounded-xl p-5 shadow-sm border-t-4 border-t-purple-600">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs font-semibold text-slate-500">মোট আদায়কৃত ফি</p>
                            <h3 class="text-2xl font-black text-slate-800 mt-1">৳ ৭,৪১,০০০</h3>
                        </div>
                        <div class="p-3 bg-purple-50 text-purple-600 rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                    </div>
                    <p class="mt-3 text-[11px] text-purple-700 font-bold bg-purple-50 inline-block px-2 py-0.5 rounded">চলতি অর্থবছর ২০২৬</p>
                </div>

            </div>

            <!-- Table Section -->
            <div class="bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden p-5">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-5 gap-4">
                    <div>
                        <h3 class="text-base font-bold text-slate-800">সাম্প্রতিক চালক নিবন্ধন ও আবেদন তালিকা</h3>
                        <p class="text-xs text-slate-500">নতুন আবেদনকৃত চালকদের তথ্য যাচাই ও অনুমোদন প্যানেল</p>
                    </div>
                    <div class="w-full sm:w-auto">
                        <input type="text" placeholder="চালক বা ভেহিকেল নম্বর দিয়ে খুঁজুন..." class="w-full sm:w-72 px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs focus:outline-none focus:border-[#1B4D44]">
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[650px]">
                        <thead>
                            <tr class="border-b border-slate-200 text-xs text-slate-600 uppercase tracking-wider bg-slate-50">
                                <th class="py-3 px-4">চালকের নাম</th>
                                <th class="py-3 px-4">মোবাইল নম্বর</th>
                                <th class="py-3 px-4">ভেহিকেল নম্বর</th>
                                <th class="py-3 px-4">স্ট্যাটাস</th>
                                <th class="py-3 px-4 text-right">কার্যক্রম (Action)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-xs sm:text-sm text-slate-700">
                            <tr class="hover:bg-slate-50 transition">
                                <td class="py-3.5 px-4 font-bold text-slate-800">মো. রফিকুল ইসলাম</td>
                                <td class="py-3.5 px-4 text-slate-600">01711223344</td>
                                <td class="py-3.5 px-4 text-slate-600">GZP-1024</td>
                                <td class="py-3.5 px-4">
                                    <span class="bg-amber-100 text-amber-800 px-2.5 py-1 rounded text-[11px] font-bold">Pending</span>
                                </td>
                                <td class="py-3.5 px-4 text-right space-x-1">
                                    <button class="px-3 py-1 bg-[#1B4D44] hover:bg-[#143a33] text-white rounded text-xs font-bold transition shadow">অ্যাপ্রুভ</button>
                                    <button class="px-3 py-1 bg-red-100 hover:bg-red-200 text-red-700 rounded text-xs font-bold transition">বাতিল</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition">
                                <td class="py-3.5 px-4 font-bold text-slate-800">আব্দুল করিম মিয়া</td>
                                <td class="py-3.5 px-4 text-slate-600">01822334455</td>
                                <td class="py-3.5 px-4 text-slate-600">GZP-3052</td>
                                <td class="py-3.5 px-4">
                                    <span class="bg-emerald-100 text-emerald-800 px-2.5 py-1 rounded text-[11px] font-bold">Active</span>
                                </td>
                                <td class="py-3.5 px-4 text-right">
                                    <button class="px-3 py-1 bg-slate-200 hover:bg-slate-300 text-slate-700 rounded text-xs font-bold transition">বিস্তারিত</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
@endsection