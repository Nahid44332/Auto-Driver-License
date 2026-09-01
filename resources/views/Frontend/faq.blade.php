@extends('Frontend.master')

@section('content')
<div class="min-h-[85vh] bg-[#1B4D44] py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    
    <!-- ব্যাকগ্রাউন্ড গ্লো ইফেক্ট -->
    <div class="absolute inset-0 -z-10 pointer-events-none">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-[#113831] rounded-full opacity-40 blur-[130px]"></div>
    </div>

    <div class="max-w-4xl mx-auto">
        
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="bg-[#166534]/50 border border-emerald-500/30 text-emerald-300 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
                সাধারণ জিজ্ঞাসা
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-3 mb-3">
                সচরাচর জিজ্ঞাসিত প্রশ্নাবলী (FAQ)
            </h2>
            <p class="text-sm sm:text-base text-slate-300">
                অটো লাইসেন্সিং সিস্টেম এবং আবেদন প্রক্রিয়া সম্পর্কে চালকদের বহুল জিজ্ঞাসিত কিছু প্রশ্ন ও তার উত্তর।
            </p>
        </div>

        <!-- FAQ Accordion/Cards Container -->
        <div class="space-y-4">
            
            <!-- Question 1 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl">
                <h3 class="text-base sm:text-lg font-bold text-white mb-2 flex items-center space-x-2">
                    <span class="text-emerald-400">প্রশ্ন ১:</span>
                    <span>ডিজিটাল লাইসেন্সের জন্য কীভাবে আবেদন করব?</span>
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-6 border-l-2 border-emerald-500/40 ml-1">
                    প্রথমে 'রেজিস্ট্রেশন করুন' অপশনে গিয়ে আপনার সঠিক তথ্য (NID, মোবাইল নম্বর ও গাড়ির বিবরণ) দিয়ে অ্যাকাউন্ট খুলুন। এরপর লগইন করে প্রয়োজনীয় কাগজপত্র আপলোড করে আবেদন সম্পন্ন করতে পারবেন।
                </p>
            </div>

            <!-- Question 2 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl">
                <h3 class="text-base sm:text-lg font-bold text-white mb-2 flex items-center space-x-2">
                    <span class="text-emerald-400">প্রশ্ন ২:</span>
                    <span>লাইসেন্স যাচাই করব কীভাবে?</span>
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-6 border-l-2 border-emerald-500/40 ml-1">
                    আমাদের ওয়েবসাইটের 'লাইসেন্স যাচাই' পেজে গিয়ে আপনার লাইসেন্স নম্বর বা ভেহিকেল নম্বর লিখে সার্চ করলেই তাৎক্ষণিকভাবে লাইসেন্সের স্ট্যাটাস (বৈধ কি না) দেখতে পাবেন।
                </p>
            </div>

            <!-- Question 3 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl">
                <h3 class="text-base sm:text-lg font-bold text-white mb-2 flex items-center space-x-2">
                    <span class="text-emerald-400">প্রশ্ন ৩:</span>
                    <span>ডিজিটাল লাইসেন্সের মেয়াদ কত দিন থাকে?</span>
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-6 border-l-2 border-emerald-500/40 ml-15">
                    সাধারণত প্রতিটি ডিজিটাল লাইসেন্সের মেয়াদ ইস্যু করার তারিখ থেকে ১ বছর বা নির্দিষ্ট মে পর্যন্ত বলবৎ থাকে। মেয়াদ শেষ হওয়ার আগেই ড্যাশবোর্ড থেকে রিনিউ করে নিতে হবে।
                </p>
            </div>

            <!-- Question 4 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl">
                <h3 class="text-base sm:text-lg font-bold text-white mb-2 flex items-center space-x-2">
                    <span class="text-emerald-400">প্রশ্ন ৪:</span>
                    <span>পাসওয়ার্ড বা অ্যাকাউন্ট সংক্রান্ত সমস্যা হলে কী করব?</span>
                </h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed pl-6 border-l-2 border-emerald-500/40 ml-1">
                    লগইন পেজে 'Forgot Password' অপশন ব্যবহার করে মোবাইল নম্বরের মাধ্যমে পাসওয়ার্ড পুনরুদ্ধার করতে পারেন। এছাড়া হেল্পলাইনে যোগাযোগ করতে পারেন।
                </p>
            </div>

        </div>

    </div>
</div>
@endsection