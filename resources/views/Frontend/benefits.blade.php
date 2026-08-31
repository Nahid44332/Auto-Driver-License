@extends('Frontend.master')

@section('content')
<div class="min-h-[85vh] bg-[#1B4D44] py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    
    <!-- ব্যাকগ্রাউন্ড গ্লো ইফেক্ট -->
    <div class="absolute inset-0 -z-10 pointer-events-none">
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-[#113831] rounded-full opacity-40 blur-[130px]"></div>
    </div>

    <div class="max-w-6xl mx-auto">
        
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="bg-[#166534]/50 border border-emerald-500/30 text-emerald-300 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
                ডিজিটাল সুবিধা
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-3 mb-3">
                অটো লাইসেন্সিং সিস্টেমের সুবিধাসমূহ
            </h2>
            <p class="text-sm sm:text-base text-slate-300">
                স্মার্ট বাংলাদেশ গড়ার প্রত্যয়ে চালক এবং ট্রাফিক ব্যবস্থাপনাকে সহজ ও নিরাপদ করতে আমাদের এই আধুনিক উদ্যোগ।
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Feature 1 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl hover:border-emerald-500/40 transition duration-300 group">
                <div class="w-12 h-12 bg-emerald-600/20 border border-emerald-500/30 rounded-xl flex items-center justify-center text-emerald-400 text-2xl mb-4 group-hover:scale-110 transition duration-300">
                    ⚡
                </div>
                <h3 class="text-lg font-bold text-white mb-2">তাৎক্ষণিক কিউআর ভেরিফিকেশন</h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    স্মার্টফোনের মাধ্যমে মুহূর্তেই যেকোনো ইজি বাইকের লাইসেন্স ও বৈধতা যাচাই করতে পারবেন ট্রাফিক পুলিশ বা সাধারণ নাগরিক।
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl hover:border-emerald-500/40 transition duration-300 group">
                <div class="w-12 h-12 bg-amber-600/20 border border-amber-500/30 rounded-xl flex items-center justify-center text-amber-400 text-2xl mb-4 group-hover:scale-110 transition duration-300">
                    🛡️
                </div>
                <h3 class="text-lg font-bold text-white mb-2">নিরাপদ ও হয়রানিমুক্ত</h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    সরাসরি অনলাইনের মাধ্যমে ঘরে বসেই লাইসেন্স রিনিউ এবং আবেদন করা যায়, ফলে কোনো রকম মধ্যস্বত্বভোগী বা দালালের ঝামেলা নেই।
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl hover:border-emerald-500/40 transition duration-300 group">
                <div class="w-12 h-12 bg-blue-600/20 border border-blue-500/30 rounded-xl flex items-center justify-center text-blue-400 text-2xl mb-4 group-hover:scale-110 transition duration-300">
                    📊
                </div>
                <h3 class="text-lg font-bold text-white mb-2">স্বয়ংক্রিয় ডাটাবেজ ম্যানেজমেন্ট</h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    সকল চালকের তথ্য ও গাড়ির হিসাব সুনির্দিষ্টভাবে ডিজিটাল ডাটাবেজে সংরক্ষিত থাকে, যা ট্রাফিক কন্ট্রোলকে আরও সহজ করে।
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl hover:border-emerald-500/40 transition duration-300 group">
                <div class="w-12 h-12 bg-purple-600/20 border border-purple-500/30 rounded-xl flex items-center justify-center text-purple-400 text-2xl mb-4 group-hover:scale-110 transition duration-300">
                    📱
                </div>
                <h3 class="text-lg font-bold text-white mb-2">মোবাইল ফ্রেন্ডলি ড্যাশবোর্ড</h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    চালকরা খুব সহজেই তাদের মোবাইল ফোন থেকে নিজেদের প্রোফাইল, লাইসেন্স স্ট্যাটাস এবং নোটিশগুলো দেখতে পারবেন।
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl hover:border-emerald-500/40 transition duration-300 group">
                <div class="w-12 h-12 bg-teal-600/20 border border-teal-500/30 rounded-xl flex items-center justify-center text-teal-400 text-2xl mb-4 group-hover:scale-110 transition duration-300">
                    🔔
                </div>
                <h3 class="text-lg font-bold text-white mb-2">জরুরি নোটিশ ও আপডেট</h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    কর্তৃপক্ষের যেকোনো জরুরি ঘোষণা বা নির্দেশনা চালকদের কাছে নোটিফিকেশন বা ব্যানার আকারে পৌঁছে যায়।
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl hover:border-emerald-500/40 transition duration-300 group">
                <div class="w-12 h-12 bg-rose-600/20 border border-rose-500/30 rounded-xl flex items-center justify-center text-rose-400 text-2xl mb-4 group-hover:scale-110 transition duration-300">
                    🤝
                </div>
                <h3 class="text-lg font-bold text-white mb-2">আইনি সুরক্ষা ও পরিচয়</h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    প্রতিটি নিবন্ধিত অটোরিকশা চালকের নিজস্ব পেশাগত স্বীকৃতি ও আইনি সুরক্ষা নিশ্চিত করা হয়।
                </p>
            </div>

        </div>

        <!-- Call to Action Section -->
        <div class="mt-12 bg-[#12362F] border border-emerald-500/30 rounded-2xl p-8 text-center relative overflow-hidden shadow-2xl">
            <h3 class="text-2xl font-bold text-white mb-2">আজই আপনার ডিজিটাল লাইসেন্সের জন্য আবেদন করুন</h3>
            <p class="text-sm text-slate-300 mb-6 max-w-xl mx-auto">
                সময় বাঁচান, নিরাপদ থাকুন। সরকারি নিয়মের আওতায় এসে আপনার ব্যবসাকে করুন আরও সুশৃঙ্খল।
            </p>
            <a href="#" class="inline-block px-8 py-3.5 bg-[#f59e0b] hover:bg-[#d97706] text-gray-900 font-bold rounded-xl shadow-lg transition transform hover:-translate-y-0.5 text-sm">
                এখনই আবেদন করুন
            </a>
        </div>

    </div>
</div>
@endsection