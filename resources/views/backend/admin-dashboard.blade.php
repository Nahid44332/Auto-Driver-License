<!DOCTYPE html>
<html lang="bn" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>অটো লাইসেন্স বিডি - সরকারি ড্যাশবোর্ড</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts (Hind Siliguri) -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Alpine.js for Mobile Menu & Accessibility -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            font-family: 'Hind Siliguri', sans-serif;
        }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body x-data="{ sidebarOpen: false, fontSize: 'normal' }" 
      :class="{ 'text-sm': fontSize === 'small', 'text-base': fontSize === 'normal', 'text-lg': fontSize === 'large' }" 
      class="min-h-full bg-slate-100 text-slate-800 flex flex-col selection:bg-[#1B4D44] selection:text-white">

    <!-- Gov Style Top Utility Bar (Government Header Extension) -->
    <div class="bg-[#143a33] text-emerald-100 text-[11px] px-4 py-1 flex justify-between items-center z-50 border-b border-emerald-900">
        <div class="flex items-center space-x-4">
            <span>🇧🇩 গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span>
            <span class="hidden sm:inline">|</span>
            <span class="hidden sm:inline text-amber-300 font-semibold">হটলাইন (জরুরি সেবা): ৯৯৯ / ১৬১২৩</span>
        </div>
        <div class="flex items-center space-x-3">
            <!-- Accessibility: Font Resizer -->
            <div class="flex items-center space-x-1 bg-white/10 px-2 py-0.5 rounded text-[10px]">
                <span>ফন্ট:</span>
                <button @click="fontSize = 'small'" class="hover:text-white font-bold px-1">ছোট</button>
                <span>/</span>
                <button @click="fontSize = 'normal'" class="hover:text-white font-bold px-1">স্বাভাবিক</button>
                <span>/</span>
                <button @click="fontSize = 'large'" class="hover:text-white font-bold px-1">বড়</button>
            </div>
            <!-- Language Toggle -->
            <button class="bg-white/10 hover:bg-white/20 px-2 py-0.5 rounded text-[10px] font-bold transition">English</button>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="bg-[#1B4D44] text-white shadow-md fixed top-7 left-0 right-0 z-40 h-16 flex items-center justify-between px-4 sm:px-6">
        <div class="flex items-center space-x-3">
            <!-- Mobile Hamburger Button -->
            <button @click="sidebarOpen = !sidebarOpen" class="md:hidden p-2 rounded-lg bg-white/10 text-emerald-300 hover:bg-white/20 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Government Logo & Portal Title -->
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-inner overflow-hidden border-2 border-amber-400">
                    <!-- Placeholder for Gov Monogram/Logo -->
                    <span class="text-[#1B4D44] font-black text-xs">বিডি</span>
                </div>
                <div>
                    <h1 class="text-sm sm:text-base font-bold tracking-wide leading-tight">অটো লাইসেন্স ব্যবস্থাপনা সিস্টেম</h1>
                    <p class="text-[10px] text-emerald-200 tracking-wider">স্থানীয় সরকার বিভাগ, মন্ত্রণালয়</p>
                </div>
            </div>
        </div>

        <!-- User Profile & Admin Logout -->
        <div class="flex items-center space-x-3 sm:space-x-4">
            <div class="text-right hidden sm:block">
                <p class="text-xs font-bold text-white">{{ Auth::user()->name ?? 'সিস্টেম এডমিনিস্ট্রেটর' }}</p>
                <p class="text-[10px] text-emerald-200">рол: Super Admin</p>
            </div>
            <a href="{{ route('admin.logout') }}" 
               class="px-3 py-1.5 bg-red-600 hover:bg-red-700 text-white text-xs font-bold rounded-lg transition shadow flex items-center gap-1.5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                <span class="hidden sm:inline">লগআউট</span>
            </a>
        </div>
    </header>

    <!-- Scrolling Notice Ticker (Gov Feature) -->
    <div class="bg-amber-50 border-b border-amber-200 text-amber-900 text-xs px-4 py-2 fixed top-[91px] left-0 right-0 z-30 flex items-center shadow-sm">
        <div class="bg-amber-600 text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider mr-3 shrink-0">
            জরুরি ঘোষণা
        </div>
        <div class="overflow-hidden whitespace-nowrap relative w-full">
            <p class="inline-block animate-[marquee_25s_linear_infinite] text-xs font-medium">
                📢 ২০২৬ সালের নতুন লাইসেন্স নবায়ন কার্যক্রম শুরু হয়েছে। সকল চালকদের আগামী ৩০ সেপ্টেম্বরের মধ্যে অনলাইন ডাটাবেজ আপডেট করার নির্দেশ দেওয়া হলো। — কর্তৃপক্ষ।
            </p>
        </div>
    </div>

    <!-- Main Content Wrapper -->
    <div class="flex pt-[131px] flex-grow relative">
        
        <!-- Mobile Sidebar Backdrop -->
        <div x-show="sidebarOpen" 
             @click="sidebarOpen = false" 
             x-transition.opacity
             class="fixed inset-0 bg-black/60 z-40 md:hidden"
             x-cloak></div>

        <!-- Professional Gov Sidebar -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" 
               class="w-64 bg-[#1B4D44] text-white flex flex-col shadow-2xl fixed left-0 top-[131px] bottom-0 z-40 overflow-y-auto transition-transform duration-300 ease-in-out md:translate-x-0 border-r border-emerald-900">
            
            <div class="p-4 border-b border-white/10 flex justify-between items-center bg-black/10">
                <div>
                    <p class="text-[10px] uppercase tracking-wider text-emerald-300 font-bold">মেইন মেনু ও কন্ট্রোল</p>
                </div>
                <button @click="sidebarOpen = false" class="md:hidden text-slate-300 hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <nav class="flex-grow p-3 space-y-1 text-sm font-medium">
                <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 bg-white/15 text-white rounded-lg transition shadow border-l-4 border-amber-400 font-semibold">
                    <svg class="w-5 h-5 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    ড্যাশবোর্ড হোম
                </a>
                <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 text-slate-200 hover:bg-white/5 hover:text-white rounded-lg transition">
                    <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    চালক ডাটাবেজ
                </a>
                <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 text-slate-200 hover:bg-white/5 hover:text-white rounded-lg transition">
                    <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    লাইসেন্স অনুমোদন (Pending)
                </a>
                <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 text-slate-200 hover:bg-white/5 hover:text-white rounded-lg transition">
                    <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                    ফি কালেকশন ও হিসাব
                </a>
                <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 text-slate-200 hover:bg-white/5 hover:text-white rounded-lg transition">
                    <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    নোটিশ ও সার্কুলার
                </a>
                <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 text-slate-200 hover:bg-white/5 hover:text-white rounded-lg transition">
                    <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    রিপোর্ট ও পরিসংখ্যান
                </a>
                <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 text-slate-200 hover:bg-white/5 hover:text-white rounded-lg transition">
                    <svg class="w-5 h-5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                    সিস্টেম সেটিংস
                </a>
            </nav>

            <div class="p-3 border-t border-white/10 text-center text-[11px] text-emerald-200 bg-black/10">
                সিস্টেম ভার্সন: v2.6.0 (Gov)
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-grow w-full md:ml-64 p-4 sm:p-6 lg:p-8 space-y-6 bg-slate-100">
            
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

        </main>
    </div>

    <!-- Professional Government Footer -->
    <footer class="bg-white border-t border-slate-300 py-4 text-center text-xs text-slate-600 z-30 md:ml-64 transition-all">
        <div class="max-w-7xl mx-auto px-4 flex flex-col sm:flex-row justify-between items-center gap-2">
            <p>© কপিরাইট ২০২৬, অটো লাইসেন্স বিডি — সর্বস্বত্ব সংরক্ষিত।</p>
            <p class="text-[11px] text-slate-500">কারিগরি সহায়তায়: <span class="font-semibold text-[#1B4D44]">Flowstack IT Company</span></p>
        </div>
    </footer>

    <!-- Marquee Animation CSS -->
    <style>
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
    </style>

</body>
</html>