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
                <a href="{{route('admin.dashboard')}}" class="flex items-center gap-3 px-3.5 py-2.5 bg-white/15 text-white rounded-lg transition shadow border-l-4 border-amber-400 font-semibold">
                    <svg class="w-5 h-5 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    ড্যাশবোর্ড হোম
                </a>
                <a href="{{route('admin.drivers.index')}}" class="flex items-center gap-3 px-3.5 py-2.5 text-slate-200 hover:bg-white/5 hover:text-white rounded-lg transition">
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
