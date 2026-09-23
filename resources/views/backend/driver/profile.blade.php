@extends('backend.driver.master') 

@section('content')
<div class="w-full p-4 sm:p-6 lg:p-8">
    
    <div class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-100">
            <div>
                <h1 class="text-xl font-extrabold text-slate-800">ড্রাইভার প্রোফাইল ও তথ্য আপডেট</h1>
                <p class="text-xs text-slate-500 mt-0.5">আপনার সকল সঠিক তথ্য দিয়ে প্রোফাইল ১০০% সম্পন্ন করুন।</p>
            </div>
            <a href="{{ route('driver.dashboard') }}" class="px-4 py-2 bg-slate-100 text-slate-700 text-xs font-bold rounded-xl hover:bg-slate-200 transition">
                ← ড্যাশবোর্ডে ফিরে যান
            </a>
        </div>

        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold rounded-2xl">
                {{ session('success') }}
            </div>
        @endif

      <form action="{{ route('driver.profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
    @csrf

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div>
            <label class="block text-xs font-bold text-slate-600 mb-1">পূর্ণ নাম</label>
            <input type="text" name="name" value="{{ old('name', $driver->name) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-emerald-500 font-medium">
        </div>

        <div>
            <label class="block text-xs font-bold text-slate-600 mb-1">মোবাইল নম্বর</label>
            <input type="text" value="{{ $driver->mobile }}" disabled class="w-full px-4 py-2.5 rounded-xl border border-slate-200 bg-slate-100 text-slate-500 text-sm font-mono">
        </div>

        <div>
            <label class="block text-xs font-bold text-slate-600 mb-1">পিতার নাম</label>
            <input type="text" name="father_name" value="{{ old('father_name', $driver->father_name) }}" placeholder="পিতার নাম লিখুন" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-emerald-500 font-medium">
        </div>

        <div>
            <label class="block text-xs font-bold text-slate-600 mb-1">এনআইডি (NID) নম্বর</label>
            <input type="number" name="nid_number" value="{{ old('nid_number', $driver->nid_number) }}" placeholder="এনআইডি নম্বর লিখুন" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-emerald-500 font-medium">
        </div>

        <div>
            <label class="block text-xs font-bold text-slate-600 mb-1">জন্ম তারিখ</label>
            <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $driver->date_of_birth) }}" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-emerald-500 font-medium">
        </div>

        <div>
            <label class="block text-xs font-bold text-slate-600 mb-1">গাড়ির ধরন</label>
            <select name="vehicle_type" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-emerald-500 font-medium bg-white">
                <option value="easy_bike" {{ $driver->vehicle_type == 'easy_bike' ? 'selected' : '' }}>Easy Bike</option>
                <option value="cng" {{ $driver->vehicle_type == 'cng' ? 'selected' : '' }}>CNG</option>
                <option value="battery_rickshaw" {{ $driver->vehicle_type == 'battery_rickshaw' ? 'selected' : '' }}>Battery Rickshaw</option>
            </select>
        </div>

        <div>
            <label class="block text-xs font-bold text-slate-600 mb-1">গাড়ি নম্বর / প্লেট</label>
            <input type="text" name="vehicle_number" value="{{ old('vehicle_number', $driver->vehicle_number) }}" placeholder="যেমন: ঢাকা-থ-১২৩৪" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-emerald-500 font-medium">
        </div>
    </div>

    <!-- 📸 Photo and NID Document Upload Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 pt-2 border-t border-slate-100">
        <div>
            <label class="block text-xs font-bold text-slate-600 mb-1">ড্রাইভারের ছবি (পাসপোর্ট সাইজ)</label>
            <input type="file" name="driver_photo" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs bg-slate-50 file:mr-4 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
            @if($driver->driver_photo)
                <div class="mt-2">
                    <img src="{{ asset($driver->driver_photo) }}" alt="Driver Photo" class="w-16 h-16 object-cover rounded-xl border border-slate-200 shadow-sm">
                </div>
            @endif
        </div>

        <div>
            <label class="block text-xs font-bold text-slate-600 mb-1">এনআইডি কপি (ছবি বা স্ক্যান কপি)</label>
            <input type="file" name="nid_copy" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-xs bg-slate-50 file:mr-4 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
            @if($driver->nid_copy)
                <div class="mt-2">
                    <a href="{{ asset($driver->nid_copy) }}" target="_blank" class="text-xs text-emerald-600 font-bold underline">সংরক্ষিত এনআইডি কপি দেখুন</a>
                </div>
            @endif
        </div>
    </div>

    <div>
        <label class="block text-xs font-bold text-slate-600 mb-1">বর্তমান ঠিকানা</label>
        <textarea name="address" rows="3" placeholder="আপনার বর্তমান ঠিকানা লিখুন..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-emerald-500 font-medium">{{ old('address', $driver->address) }}</textarea>
    </div>

    <div class="flex justify-end pt-4">
        <button type="submit" class="px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold rounded-xl transition shadow-sm">
            প্রোফাইল ও ডকুমেন্টস আপডেট করুন
        </button>
    </div>
</form>

    </div>

</div>
@endsection