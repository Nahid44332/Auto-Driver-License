@extends('Frontend.master')
@section('content')
     <!-- Hero Section -->
    <section class="relative bg-[#1b4d44] pt-16 pb-36 lg:pt-24 lg:pb-44 overflow-hidden">
        <!-- Right Background Auto Image -->
        <div class="absolute inset-y-0 right-0 w-full lg:w-[55%] z-0 flex items-center justify-end">
            <div class="w-full h-full relative">
                <!-- লাল ব্যাটারি রিকশার ইমেজ -->
                <img src="{{ asset('Frontend/hero.jpg') }}" alt="Battery Auto Rickshaw"
                    class="w-full h-full object-contain object-right lg:object-cover opacity-90" />
                <!-- Gradient Overlay for smooth text readability -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-[#1b4d44] via-[#1b4d44]/80 to-transparent lg:via-[#1b4d44]/40">
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-2xl">
                <span
                    class="bg-emerald-700/80 text-emerald-100 text-xs sm:text-sm font-semibold px-4 py-1.5 rounded-full inline-block mb-6 backdrop-blur-sm">
                    ডিজিটাল বাংলাদেশ গড়ার প্রত্যয়
                </span>
                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-bold text-white leading-[1.2] mb-6">
                    বাংলাদেশের অটোরিকশা চালকদের জন্য <br>
                    <span class="text-amber-400">স্মার্ট ডিজিটাল লাইসেন্সিং সিস্টেম</span>
                </h1>
                <p class="text-base sm:text-lg text-emerald-100 mb-8 font-light tracking-wide leading-relaxed">
                    সহজ অনলাইন রেজিস্ট্রেশন, তাৎক্ষণিক কিউআর ভেরিফিকেশন এবং নিরাপদ সড়ক নিশ্চিতকরণ। আপনার পেশাগত পরিচয়
                    এখন আরও সুরক্ষিত।
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#"
                        class="px-7 py-3.5 bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold rounded-xl shadow-lg transition transform hover:-translate-y-0.5">
                        এখনই লাইসেন্সের জন্য আবেদন করুন
                    </a>
                    <a href="#verify"
                        class="px-7 py-3.5 bg-white/10 hover:bg-white/20 border border-white/30 text-white font-medium rounded-xl backdrop-blur-sm transition">
                        লাইসেন্স স্ট্যাটাস যাচাই করুন
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Live Statistics Counter -->
    <section class="bg-white border-b border-gray-100 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-4">
                    <h3 class="text-3xl sm:text-4xl font-bold text-emerald-800 mb-1">৫,৪২০+</h3>
                    <p class="text-sm text-gray-500 font-medium">নিবন্ধিত চালক</p>
                </div>
                <div class="p-4">
                    <h3 class="text-3xl sm:text-4xl font-bold text-amber-500 mb-1">৪,৮০০+</h3>
                    <p class="text-sm text-gray-500 font-medium">অনুমোদিত লাইসেন্স</p>
                </div>
                <div class="p-4">
                    <h3 class="text-3xl sm:text-4xl font-bold text-teal-700 mb-1">১৬টি</h3>
                    <p class="text-sm text-gray-500 font-medium">অঞ্চল বা সমিতি</p>
                </div>
                <div class="p-4">
                    <h3 class="text-3xl sm:text-4xl font-bold text-indigo-700 mb-1">১০০%</h3>
                    <p class="text-sm text-gray-500 font-medium">নিরাপদ ও ডিজিটাল</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">আমাদের বিশেষ সুবিধাসমূহ</h2>
            <p class="text-gray-600">অটোরিকশা চালকদের শৃঙ্খলা ও আইনি সুরক্ষা নিশ্চিত করতে আমাদের এই আধুনিক ডিজিটাল
                প্ল্যাটফর্ম।</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div
                    class="w-14 h-14 bg-emerald-100 text-emerald-700 rounded-2xl flex items-center justify-center text-2xl mb-6">
                    📱</div>
                <h3 class="text-xl font-bold mb-3">সহজ অনলাইন রেজিস্ট্রেশন</h3>
                <p class="text-gray-600 text-sm leading-relaxed">মোবাইল নম্বর দিয়ে খুব সহজেই অ্যাকাউন্ট খুলে ঘরে বসে
                    চালক ও অটোরিকশার তথ্য সাবমিট করা যায়।</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div
                    class="w-14 h-14 bg-amber-100 text-amber-700 rounded-2xl flex items-center justify-center text-2xl mb-6">
                    📄</div>
                <h3 class="text-xl font-bold mb-3">ডিজিটাল লাইসেন্স ও আইডি কার্ড</h3>
                <p class="text-gray-600 text-sm leading-relaxed">প্রথম পাতায় অফিশিয়াল সার্টিফিকেট এবং দ্বিতীয় পাতায় পকেট
                    সাইজ প্রিন্টেবল আইডি কার্ড ও ট্রাফিক নিয়মকানুন।</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div
                    class="w-14 h-14 bg-teal-100 text-teal-700 rounded-2xl flex items-center justify-center text-2xl mb-6">
                    🔍</div>
                <h3 class="text-xl font-bold mb-3">কিউআর কোড ভিত্তিক যাচাই</h3>
                <p class="text-gray-600 text-sm leading-relaxed">প্রশাসন বা ট্রাফিক পুলিশ কিউআর কোড স্ক্যান করেই
                    মুহূর্তেই লাইসেন্স আসল কি না তা যাচাই করতে পারবে।</p>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="bg-emerald-900 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl font-bold mb-4">যেভাবে লাইসেন্স পাবেন</h2>
                <p class="text-emerald-200">খুব সহজ কয়েকটি ধাপ অনুসরণ করে আপনার ডিজিটাল লাইসেন্স সংগ্রহ করুন।</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 text-center">
                <div class="bg-emerald-800/60 p-6 rounded-xl border border-emerald-700">
                    <div class="text-2xl font-bold text-amber-400 mb-2">০১</div>
                    <h4 class="font-semibold mb-1">রেজিস্ট্রেশন</h4>
                    <p class="text-xs text-emerald-200">মোবাইল নম্বর দিয়ে সাইট রেজিস্টার করুন।</p>
                </div>
                <div class="bg-emerald-800/60 p-6 rounded-xl border border-emerald-700">
                    <div class="text-2xl font-bold text-amber-400 mb-2">০২</div>
                    <h4 class="font-semibold mb-1">ফর্ম পূরণ</h4>
                    <p class="text-xs text-emerald-200">তথ্য ও ছবি দিয়ে আবেদন ফর্ম সাবমিট করুন।</p>
                </div>
                <div class="bg-emerald-800/60 p-6 rounded-xl border border-emerald-700">
                    <div class="text-2xl font-bold text-amber-400 mb-2">০৩</div>
                    <h4 class="font-semibold mb-1">ফি প্রদান</h4>
                    <p class="text-xs text-emerald-200">বিকাশ বা নগদের মাধ্যমে ফি পরিশোধ করুন।</p>
                </div>
                <div class="bg-emerald-800/60 p-6 rounded-xl border border-emerald-700">
                    <div class="text-2xl font-bold text-amber-400 mb-2">০৪</div>
                    <h4 class="font-semibold mb-1">কমিটি রিভিউ</h4>
                    <p class="text-xs text-emerald-200">উপ-কমিটি কর্তৃক তথ্য যাচাই ও অনুমোদন।</p>
                </div>
                <div class="bg-emerald-800/60 p-6 rounded-xl border border-emerald-700">
                    <div class="text-2xl font-bold text-amber-400 mb-2">০৫</div>
                    <h4 class="font-semibold mb-1">ডাউনলোড ও প্রিন্ট</h4>
                    <p class="text-xs text-emerald-200">৪-৫ দিন পর পিডিএফ ডাউনলোড করে প্রিন্ট করুন।</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">সচরাচর জিজ্ঞাসিত প্রশ্নাবলী</h2>
            <p class="text-gray-600">আপনার মনে থাকা বিভিন্ন প্রশ্নের উত্তর জেনে নিন।</p>
        </div>

        <div class="space-y-4">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-lg text-emerald-900 mb-2">লাইসেন্স পেতে কত দিন সময় লাগে?</h3>
                <p class="text-gray-600 text-sm">আবেদন সাবমিট এবং পেমেন্ট ভেরিফাই হওয়ার পর উপ-কমিটি কর্তৃক যাচাই-বাছাই
                    শেষে সাধারণত ৪ থেকে ৫ কার্যদিবসের মধ্যে লাইসেন্স প্রস্তুত হয়ে যায়।</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-lg text-emerald-900 mb-2">পিডিএফ ডাউনলোড করার পর কীভাবে প্রিন্ট করব?</h3>
                <p class="text-gray-600 text-sm">ডাউনলোড করা ২ পাতার পিডিএফ ফাইলে প্রথম পাতায় মূল সার্টিফিকেট এবং
                    দ্বিতীয় পাতায় আইডি কার্ড থাকবে। যেকোনো ভালো প্রিন্টার দিয়ে A4 সাইজ কাগজে এটি প্রিন্ট করে কার্ডটি
                    লেমিনেটিং করে নিতে পারবেন।</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-lg text-emerald-900 mb-2">ট্রাফিক পুলিশ কীভাবে লাইসেন্স যাচাই করবে?</h3>
                <p class="text-gray-600 text-sm">লাইসেন্স কার্ডে একটি ইউনিক কিউআর কোড (QR Code) থাকবে। পুলিশ যেকোনো
                    স্মার্টফোন দিয়ে স্ক্যান করলেই চালকের রিয়েল-টাইম স্ট্যাটাস ও তথ্য দেখতে পাবে।</p>
            </div>
        </div>
    </section>
@endsection