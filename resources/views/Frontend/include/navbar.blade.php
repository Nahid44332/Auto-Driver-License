    <!-- Notice Bar -->
    <div class="bg-amber-500 text-slate-950 text-sm py-2 px-4 font-medium">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-2 overflow-hidden">
                <span class="bg-amber-600 text-white text-xs px-2 py-0.5 rounded uppercase font-bold">জরুরি ঘোষণা</span>
                <p class="truncate">সকল অটোরিকশা চালকদের আগামী ৭ দিনের মধ্যে নতুন ডিজিটাল লাইসেন্সের জন্য আবেদন করার
                    নির্দেশ দেওয়া হলো।</p>
            </div>
            <div class="hidden md:block text-xs font-semibold">হেল্পলাইন: 09600-XXXXXX</div>
        </div>
    </div>
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="flex items-center space-x-3 group cursor-pointer">
                    <span class="text-3xl">🛺</span>
                    <div>
                        <span class="text-xl font-bold text-emerald-800 group-hover:text-emerald-600 transition">Auto
                            License BD</span>
                        <p class="text-xs text-gray-500">অটো লাইসেন্স বিডি</p>
                    </div>
                </a>

                <!-- Nav Links -->
                <div class="hidden md:flex items-center space-x-8 font-medium">
                    <a href="{{ url('/') }}" class="text-emerald-700 hover:text-emerald-900">হোম</a>
                    <a href="{{ url('/lichence-verify') }}" class="text-gray-600 hover:text-emerald-900">লাইসেন্স
                        যাচাই</a>
                    <a href="{{ url('/benefits') }}" class="text-gray-600 hover:text-emerald-900">সুবিধাসমূহ</a>
                    <a href="{{ url('/guidelines') }}" class="text-gray-600 hover:text-emerald-900">নির্দেশিকা</a>
                    <a href="{{ url('faq') }}" class="text-gray-600 hover:text-emerald-900">জিজ্ঞাসাবাদ</a>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/login') }}"
                        class="px-4 py-2 text-emerald-800 bg-emerald-50 hover:bg-emerald-100 font-medium rounded-lg transition">লগইন</a>
                    <a href="{{ url('/register') }}"
                        class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white font-medium rounded-lg shadow transition">রেজিষ্টার
                        করুন</a>
                </div>
            </div>
        </div>
    </nav>
