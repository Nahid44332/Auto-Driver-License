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
                নিয়মাবলী ও নির্দেশিকা
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-3 mb-3">
                ডিজিটাল লাইসেন্স প্রাপ্তির নির্দেশিকা
            </h2>
            <p class="text-sm sm:text-base text-slate-300">
                নতুন লাইসেন্স আবেদন এবং ব্যবহারের জন্য চালকদের যে নিয়মগুলো মেনে চলতে হবে, তা নিচে দেওয়া হলো।
            </p>
        </div>

        <!-- Guidelines Cards Container -->
        <div class="space-y-6">
            
            <!-- Step 1 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl flex items-start space-x-4">
                <div class="flex-shrink-0 w-10 h-10 bg-emerald-600/20 border border-emerald-500/30 rounded-xl flex items-center justify-center text-emerald-400 font-bold text-lg">
                    ১
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white mb-1">অনলাইন নিবন্ধন ফরম পূরণ</h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        প্রথমে 'রেজিস্ট্রেশন করুন' অপশনে গিয়ে চালকের নাম, জাতীয় পরিচয়পত্র (NID) নম্বর, মোবাইল নম্বর এবং গাড়ির সঠিক তথ্য দিয়ে অ্যাকাউন্ট তৈরি করতে হবে।
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl flex items-start space-x-4">
                <div class="flex-shrink-0 w-10 h-10 bg-emerald-600/20 border border-emerald-500/30 rounded-xl flex items-center justify-center text-emerald-400 font-bold text-lg">
                    ২
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white mb-1">প্রয়োজনীয় কাগজপত্র আপলোড</h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        আবেদনের সাথে চালকের পাসপোর্ট সাইজ ছবি, এনআইডি কার্ডের কপি এবং ইজি বাইকের মালিকানার প্রমাণপত্র বা কাগজপত্রের পরিষ্কার ছবি আপলোড করতে হবে।
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl flex items-start space-x-4">
                <div class="flex-shrink-0 w-10 h-10 bg-emerald-600/20 border border-emerald-500/30 rounded-xl flex items-center justify-center text-emerald-400 font-bold text-lg">
                    ৩
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white mb-1">কর্তৃপক্ষ কর্তৃক যাচাই-বাছাই</h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        আপনার দেওয়া তথ্যগুলো ট্রাফিক বিভাগ ও সংশ্লিষ্ট কর্তৃপক্ষ কর্তৃক যাচাই করা হবে। তথ্য সঠিক থাকলে লাইসেন্স অনুমোদন করা হবে।
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="bg-[#12362F]/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-xl flex items-start space-x-4">
                <div class="flex-shrink-0 w-10 h-10 bg-emerald-600/20 border border-emerald-500/30 rounded-xl flex items-center justify-center text-emerald-400 font-bold text-lg">
                    ৪
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white mb-1">কিউআর কোডযুক্ত ডিজিটাল লাইসেন্স</h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        অনুমোদন পাওয়ার পর আপনি আপনার প্রোফাইল থেকে ডিজিটাল লাইসেন্স ও কিউআর কোড দেখতে পাবেন, যা প্রয়োজনে প্রিন্ট বা ফোনে সংরক্ষণ করা যাবে।
                    </p>
                </div>
            </div>

        </div>

        <!-- Important Notice Box -->
        <div class="mt-8 bg-amber-950/40 border border-amber-500/40 rounded-2xl p-6 text-amber-200">
            <h4 class="font-bold text-amber-400 mb-2 flex items-center space-x-2">
                <span>⚠️ জরুরি নির্দেশনা:</span>
            </h4>
            <p class="text-xs sm:text-sm leading-relaxed">
                সকল অটোরিকশা চালককে আগামী ৭ দিনের মধ্যে নতুন ডিজিটাল লাইসেন্সের জন্য আবেদন করার নির্দেশ দেওয়া হলো। ভুয়া বা নকল লাইসেন্স ব্যবহার করলে আইনানুগ ব্যবস্থা নেওয়া হবে।
            </p>
        </div>

    </div>
</div>
@endsection