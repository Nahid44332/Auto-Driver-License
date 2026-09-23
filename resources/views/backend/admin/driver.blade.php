@extends('backend.master')

@section('content')
<div class="w-full p-4 sm:p-6 lg:p-8" x-data="{ openModal: false, selectedDriver: {} }">
    
    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6 bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-800 flex items-center gap-2">
                <span class="w-3 h-3 bg-emerald-500 rounded-full inline-block"></span>
                ড্রাইভার ডাটাবেজ ও প্রোফাইল স্ট্যাটাস
            </h1>
            <p class="text-xs text-slate-500 mt-1">প্লাটফর্মে নিবন্ধিত সকল ড্রাইভারদের বিবরণ এবং তাদের প্রোফাইল কমপ্লিশন রেট।</p>
        </div>
        <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition flex items-center gap-2 shadow-sm">
            ← ড্যাশবোর্ডে ফিরে যান
        </a>
    </div>

    <!-- Table Card -->
    <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/80 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                        <th class="py-4 px-6">ড্রাইভারের বিবরণ</th>
                        <th class="py-4 px-6">মোবাইল নম্বর</th>
                        <th class="py-4 px-6">গাড়ি ও এনআইডি</th>
                        <th class="py-4 px-6">প্রোফাইল স্ট্যাটাস</th>
                        <th class="py-4 px-6">অ্যাকাউন্ট স্ট্যাটাস</th>
                        <th class="py-4 px-6 text-center">কার্যক্রম</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm">
                    @forelse($drivers as $driver)
                    @php
                        $totalFields = 6;
                        $filledFields = 0;
                        if(!empty($driver->name)) $filledFields++;
                        if(!empty($driver->mobile)) $filledFields++;
                        if(!empty($driver->vehicle_type)) $filledFields++;
                        if(!empty($driver->vehicle_number)) $filledFields++;
                        if(!empty($driver->nid_number)) $filledFields++;
                        if(!empty($driver->driver_photo) || !empty($driver->address)) $filledFields++;
                        
                        $percentage = ($driver->is_profile_completed == 1) ? 100 : round(($filledFields / $totalFields) * 100);
                    @endphp
                    <tr class="hover:bg-slate-50/60 transition group">
                        <!-- Name & Avatar -->
                        <td class="py-4 px-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-tr from-emerald-600 to-teal-500 text-white font-bold rounded-xl flex items-center justify-center text-sm shadow-sm shrink-0 group-hover:scale-105 transition">
                                    {{ mb_substr($driver->name, 0, 1) }}
                                </div>
                                <div>
                                    <p class="font-bold text-slate-800">{{ $driver->name }}</p>
                                    <p class="text-[11px] text-slate-400">যোগদান: {{ $driver->created_at->format('d M, Y') }}</p>
                                </div>
                            </div>
                        </td>

                        <!-- Mobile -->
                        <td class="py-4 px-6 text-slate-600 font-medium">
                            <span class="bg-slate-100 text-slate-700 px-2.5 py-1 rounded-lg text-xs font-mono border border-slate-200">{{ $driver->mobile }}</span>
                        </td>

                        <!-- Vehicle & NID -->
                        <td class="py-4 px-6">
                            <p class="text-xs font-semibold text-slate-700 capitalize">
                                🚗 {{ str_replace('_', ' ', $driver->vehicle_type) }} 
                                <span class="text-slate-400">({{ $driver->vehicle_number ?? 'তথ্য আপডেট করা হয় নি' }})</span>
                            </p>
                            <p class="text-[11px] text-slate-500 mt-0.5">এনআইডি: <span class="font-mono">{{ $driver->nid_number ?? 'তথ্য আপডেট করা হয় নি' }}</span></p>
                        </td>

                        <!-- Profile Completion Bar -->
                        <td class="py-4 px-6 w-52">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-xs font-bold {{ $percentage == 100 ? 'text-emerald-600' : 'text-amber-600' }}">
                                    {{ $percentage }}% সম্পন্ন
                                </span>
                            </div>
                            <div class="w-full bg-slate-100 rounded-full h-2 overflow-hidden border border-slate-200">
                                <div class="h-full rounded-full transition-all duration-500 {{ $percentage == 100 ? 'bg-emerald-500' : 'bg-amber-500' }}" style="width: {{ $percentage }}%"></div>
                            </div>
                        </td>

                        <!-- Status Badge -->
                        <td class="py-4 px-6">
                            @if($percentage == 100)
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> ১০০% কমপ্লিট
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-50 text-amber-700 border border-amber-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> অপূর্ণাঙ্গ
                                </span>
                            @endif
                        </td>

                        <!-- Actions -->
                        <td class="py-4 px-6 text-center">
                            <button @click="openModal = true; selectedDriver = {
                                name: '{{ $driver->name }}',
                                mobile: '{{ $driver->mobile }}',
                                father_name: '{{ $driver->father_name ?? "" }}',
                                nid_number: '{{ $driver->nid_number ?? "" }}',
                                date_of_birth: '{{ $driver->date_of_birth ?? "" }}',
                                vehicle_type: '{{ str_replace("_", " ", $driver->vehicle_type) }}',
                                vehicle_number: '{{ $driver->vehicle_number ?? "" }}',
                                address: '{{ $driver->address ?? "" }}',
                                status: '{{ $driver->status }}',
                                percentage: '{{ $percentage }}',
                                created_at: '{{ $driver->created_at->format("d M, Y") }}'
                            }" 
                            class="inline-flex items-center px-3.5 py-1.5 bg-emerald-50 hover:bg-emerald-600 hover:text-white text-emerald-700 border border-emerald-200 text-xs font-bold rounded-xl transition shadow-sm group">
                                বিস্তারিত দেখুন
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-12 text-center text-slate-400 text-sm">
                            কোনো ড্রাইভারের তথ্য পাওয়া যায়নি।
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        @if($drivers->hasPages())
        <div class="p-4 border-t border-slate-100 bg-slate-50/50">
            {{ $drivers->links() }}
        </div>
        @endif
    </div>

    <!-- 🌟 Detailed Information Modal -->
    <div x-show="openModal" class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 backdrop-blur-sm p-4" x-cloak style="display: none;">
        <div @click.away="openModal = false" class="bg-white rounded-3xl shadow-2xl border border-slate-200 w-full max-w-2xl overflow-hidden transform transition-all">
            
            <!-- Modal Header -->
            <div class="bg-emerald-800 text-white px-6 py-4 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-bold" x-text="selectedDriver.name"></h3>
                    <p class="text-xs text-emerald-200">ড্রাইভারের সম্পূর্ণ প্রোফাইল বিবরণী</p>
                </div>
                <button @click="openModal = false" class="w-8 h-8 rounded-full bg-emerald-700 hover:bg-emerald-600 flex items-center justify-center text-white transition">
                    ✕
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6 space-y-4 max-h-[75vh] overflow-y-auto text-sm">
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                    <div>
                        <span class="text-xs text-slate-400 block font-semibold">মোবাইল নম্বর</span>
                        <span class="font-bold text-slate-800" x-text="selectedDriver.mobile"></span>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 block font-semibold">পিতার নাম</span>
                        <span class="font-bold text-slate-800" x-text="selectedDriver.father_name || 'তথ্য আপডেট করা হয় নি'"></span>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 block font-semibold">এনআইডি নম্বর</span>
                        <span class="font-bold text-slate-800" x-text="selectedDriver.nid_number || 'তথ্য আপডেট করা হয় নি'"></span>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 block font-semibold">জন্ম তারিখ</span>
                        <span class="font-bold text-slate-800" x-text="selectedDriver.date_of_birth || 'তথ্য আপডেট করা হয় নি'"></span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                    <div>
                        <span class="text-xs text-slate-400 block font-semibold">গাড়ির ধরন</span>
                        <span class="font-bold text-slate-800 capitalize" x-text="selectedDriver.vehicle_type"></span>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 block font-semibold">গাড়ি নম্বর</span>
                        <span class="font-bold text-slate-800" x-text="selectedDriver.vehicle_number || 'তথ্য আপডেট করা হয় নি'"></span>
                    </div>
                </div>

                <div class="bg-slate-50 p-4 rounded-2xl border border-slate-200">
                    <span class="text-xs text-slate-400 block font-semibold">বর্তমান ঠিকানা</span>
                    <span class="font-bold text-slate-800" x-text="selectedDriver.address || 'তথ্য আপডেট করা হয় নি'"></span>
                </div>

                <div class="flex items-center justify-between bg-emerald-50 border border-emerald-200 p-4 rounded-2xl">
                    <div>
                        <span class="text-xs text-emerald-700 block font-semibold">প্রোফাইল কমপ্লিশন</span>
                        <span class="text-base font-extrabold text-emerald-900" x-text="selectedDriver.percentage + '% সম্পন্ন'"></span>
                    </div>
                    <div>
                        <span class="text-xs text-emerald-700 block font-semibold">অ্যাকাউন্ট স্ট্যাটাস</span>
                        <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-emerald-200 text-emerald-900 uppercase" x-text="selectedDriver.status"></span>
                    </div>
                </div>

            </div>

            <!-- Modal Footer -->
            <div class="bg-slate-50 px-6 py-3 border-t border-slate-200 flex justify-end">
                <button @click="openModal = false" class="px-5 py-2 bg-slate-200 hover:bg-slate-300 text-slate-700 text-xs font-bold rounded-xl transition">
                    বন্ধ করুন
                </button>
            </div>

        </div>
    </div>

</div>
@endsection