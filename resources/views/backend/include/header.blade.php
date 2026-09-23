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
