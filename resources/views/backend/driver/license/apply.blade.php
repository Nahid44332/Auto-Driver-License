@extends('backend.driver.master')

@section('content')
<div class="w-full p-4 sm:p-6 lg:p-8" x-data="{ step: {{ $driver->is_otp_verified ? 2 : 1 }} }">
    
    <div class="max-w-4xl mx-auto space-y-6">
        
        <!-- Header Section -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div>
                <h1 class="text-xl font-extrabold text-slate-800 flex items-center gap-2">
                    <span class="w-3 h-3 bg-emerald-500 rounded-full inline-block"></span>
                    অটো লাইসেন্স আবেদন ফরম
                </h1>
                <p class="text-xs text-slate-500 mt-0.5">৩ ধাপের মাধ্যমে খুব সহজেই আপনার লাইসেন্সের আবেদন সম্পন্ন করুন।</p>
            </div>
            <a href="{{ route('driver.dashboard') }}" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition">
                ← ড্যাশবোর্ডে ফিরে যান
            </a>
        </div>

        <!-- Progress Steps Bar -->
        <div class="grid grid-cols-3 gap-3 bg-white p-4 rounded-2xl border border-slate-200 shadow-sm text-center">
            <div :class="step === 1 ? 'bg-emerald-50 border-emerald-300 text-emerald-800' : 'bg-slate-50 border-slate-200 text-slate-400'" class="p-3 rounded-xl border transition">
                <span class="block text-[10px] font-bold uppercase">ধাপ ১</span>
                <span class="text-xs font-extrabold">ওটিপি যাচাই</span>
            </div>
            <div :class="step === 2 ? 'bg-emerald-50 border-emerald-300 text-emerald-800' : 'bg-slate-50 border-slate-200 text-slate-400'" class="p-3 rounded-xl border transition">
                <span class="block text-[10px] font-bold uppercase">ধাপ ২</span>
                <span class="text-xs font-extrabold">সম্পূর্ণ আবেদন ফর্ম</span>
            </div>
            <div :class="step === 3 ? 'bg-emerald-50 border-emerald-300 text-emerald-800' : 'bg-slate-50 border-slate-200 text-slate-400'" class="p-3 rounded-xl border transition">
                <span class="block text-[10px] font-bold uppercase">ধাপ ৩</span>
                <span class="text-xs font-extrabold">পেমেন্ট ও পিডিএফ</span>
            </div>
        </div>

        <!-- Alert Messages -->
        @if(session('success'))
            <div class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold rounded-2xl shadow-sm">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="p-4 bg-rose-50 border border-rose-200 text-rose-800 text-xs font-bold rounded-2xl shadow-sm">
                {{ session('error') }}
            </div>
        @endif

        <!-- STEP 1: WhatsApp OTP Verification -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm space-y-6" x-show="step === 1" x-cloak>
            <div class="border-b border-slate-100 pb-4">
                <h2 class="text-base font-bold text-slate-800">ধাপ ১: WhatsApp নম্বর ওটিপি ভেরিফিকেশন</h2>
                <p class="text-xs text-slate-500">আপনার সচল WhatsApp নম্বর দিন যাতে ওটিপি কোড পাঠানো যায়।</p>
            </div>

            <!-- Send OTP Form -->
            <form action="{{ route('driver.license.send.otp') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-slate-600 mb-1">WhatsApp নম্বর</label>
                    <div class="flex gap-3">
                        <input type="text" name="mobile" value="{{ old('whatsapp_number', $driver->whatsapp_number ?? $driver->mobile) }}" placeholder="যেমন: 017XXXXXXXX" class="flex-1 px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-emerald-500 font-mono" required>
                        <button type="submit" class="px-5 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold rounded-xl transition shadow-sm shrink-0">
                            ওটিপি পাঠান
                        </button>
                    </div>
                </div>
            </form>

            <!-- Verify OTP Form -->
            <form action="{{ route('driver.license.verify.otp') }}" method="POST" class="space-y-4 pt-4 border-t border-slate-100">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-slate-600 mb-1">ওটিপি কোড (৬ ডিজিট)</label>
                    <div class="flex gap-3">
                        <input type="text" name="otp_code" placeholder="যেমন: 123456" class="flex-1 px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-emerald-500 font-mono tracking-widest" maxlength="6" required>
                        <button type="submit" class="px-5 py-2.5 bg-teal-600 hover:bg-teal-700 text-white text-xs font-bold rounded-xl transition shadow-sm shrink-0">
                            ওটিপি যাচাই করুন
                        </button>
                    </div>
                </div>
            </form>

            @if($driver->is_otp_verified == 1)
            <div class="pt-4 flex justify-end">
                <button @click="step = 2" type="button" class="px-6 py-3 bg-emerald-700 hover:bg-emerald-800 text-white text-xs font-bold rounded-xl transition shadow-sm flex items-center gap-2">
                    ২য় ধাপে যান (আবেদন ফর্ম) →
                </button>
            </div>
            @endif
        </div>

        <!-- STEP 2: Full Application Form & Review -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm space-y-6" x-show="step === 2" x-cloak>
            <div class="border-b border-slate-100 pb-4">
                <h2 class="text-base font-bold text-slate-800">ধাপ ২: লাইসেন্স আবেদন ফর্ম ও তথ্য যাচাই</h2>
                <p class="text-xs text-slate-500">আপনার প্রোফাইলের তথ্যগুলো নিচে দেখে নিন এবং প্রয়োজনে নিশ্চিত করুন।</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-200 text-sm">
                <div>
                    <span class="text-xs text-slate-400 block font-semibold">নাম</span>
                    <span class="font-bold text-slate-800">{{ $driver->name }}</span>
                </div>
                <div>
                    <span class="text-xs text-slate-400 block font-semibold">মোবাইল</span>
                    <span class="font-bold text-slate-800 font-mono">{{ $driver->mobile }}</span>
                </div>
                <div>
                    <span class="text-xs text-slate-400 block font-semibold">পিতার নাম</span>
                    <span class="font-bold text-slate-800">{{ $driver->father_name }}</span>
                </div>
                <div>
                    <span class="text-xs text-slate-400 block font-semibold">এনআইডি নম্বর</span>
                    <span class="font-bold text-slate-800 font-mono">{{ $driver->nid_number }}</span>
                </div>
                <div>
                    <span class="text-xs text-slate-400 block font-semibold">গাড়ির ধরন</span>
                    <span class="font-bold text-slate-800 capitalize">{{ str_replace('_', ' ', $driver->vehicle_type) }}</span>
                </div>
                <div>
                    <span class="text-xs text-slate-400 block font-semibold">গাড়ি নম্বর</span>
                    <span class="font-bold text-slate-800">{{ $driver->vehicle_number }}</span>
                </div>
            </div>

            <div class="flex justify-between pt-4">
                <button @click="step = 1" type="button" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition">
                    ← পেছনের ধাপে যান
                </button>
                <button @click="step = 3" type="button" class="px-6 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold rounded-xl transition shadow-sm">
                    ৩য় ধাপে যান (পেমেন্ট) →
                </button>
            </div>
        </div>

        <!-- STEP 3: Payment & PDF Download -->
        <div class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm space-y-6" x-show="step === 3" x-cloak>
            <div class="border-b border-slate-100 pb-4">
                <h2 class="text-base font-bold text-slate-800">ধাপ ৩: ফি প্রদান ও ফাইনাল কনফার্মেশন</h2>
                <p class="text-xs text-slate-500">লাইসেন্স ফি বাবদ ২৫০ টাকা নিচের বিকাশ/নগদ নম্বরে সেন্ড মানি করুন।</p>
            </div>

            <div class="bg-amber-50 border border-amber-200 p-4 rounded-2xl text-xs text-amber-900 space-y-1">
                পেমেন্ট নম্বর (বিকাশ/নগদ ব্যক্তিগত/মার্চেন্ট): <strong class="font-mono text-sm">01968400331</strong> (ফি: ২৫০ টাকা)
            </div>

            <form action="{{ route('driver.license.submit.payment') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-1">যে মাধ্যম থেকে পেমেন্ট করেছেন</label>
                        <select name="payment_method" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-emerald-500 font-medium bg-white" required>
                            <option value="bkash">bKash</option>
                            <option value="nagad">Nagad</option>
                            <option value="rocket">Rocket</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 mb-1">ট্রানজ্যাকশন আইডি (TrxID)</label>
                        <input type="text" name="trx_id" placeholder="যেমন: 9L8X..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-emerald-500 font-mono uppercase" required>
                    </div>
                </div>

                <div class="flex justify-between pt-4">
                    <button @click="step = 2" type="button" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition">
                        ← পেছনের ধাপে যান
                    </button>
                    <button type="submit" class="px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold rounded-xl transition shadow-sm">
                        আবেদন সাবমিট করুন ও পিডিএফ ডাউনলোড
                    </button>
                </div>
            </form>
        </div>

    </div>

</div>
@endsection