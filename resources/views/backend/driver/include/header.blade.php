  <!-- Top Navbar -->
    <header class="bg-white border-b border-gray-200 h-16 fixed top-0 right-0 left-0 z-30 flex items-center justify-between px-4 sm:px-6 lg:px-8 shadow-sm">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-emerald-700 rounded-xl flex items-center justify-center font-bold text-white shadow-md">
                অ
            </div>
            <span class="font-bold text-gray-800 text-lg tracking-tight">অটো লাইসেন্স বিডি <span class="text-xs font-normal text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full ml-2">ড্রাইভার প্যানেল</span></span>
        </div>

        <!-- Right User Profile & Quick Logout -->
        <div class="flex items-center gap-4">
            <div class="text-right hidden sm:block">
                <p class="text-xs font-bold text-gray-800">{{ Auth::guard('driver')->user()->name }}</p>
                <p class="text-[11px] text-gray-500">{{ Auth::guard('driver')->user()->mobile }}</p>
            </div>
            <form action="{{ route('driver.logout') }}" method="POST">
                @csrf
                <button type="submit" class="px-3 py-1.5 bg-red-50 hover:bg-red-100 text-red-600 border border-red-200 text-xs font-bold rounded-lg transition flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    লগআউট
                </button>
            </form>
        </div>
    </header>