<!DOCTYPE html>
<html lang="bn" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>অটো লাইসেন্স বিডি - সরকারি ড্যাশবোর্ড</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts (Hind Siliguri) -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Alpine.js for Mobile Menu & Accessibility -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            font-family: 'Hind Siliguri', sans-serif;
        }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body x-data="{ sidebarOpen: false, fontSize: 'normal' }" 
      :class="{ 'text-sm': fontSize === 'small', 'text-base': fontSize === 'normal', 'text-lg': fontSize === 'large' }" 
      class="min-h-full bg-slate-100 text-slate-800 flex flex-col selection:bg-[#1B4D44] selection:text-white">

    @include('backend.include.header')
 
    <!-- Main Content Wrapper -->
    <div class="flex pt-[131px] flex-grow relative">
        
        <!-- Mobile Sidebar Backdrop -->
        <div x-show="sidebarOpen" 
             @click="sidebarOpen = false" 
             x-transition.opacity
             class="fixed inset-0 bg-black/60 z-40 md:hidden"
             x-cloak></div>

      @include('backend.include.Sidebar')
        <!-- Main Content Area -->
        <main class="flex-grow w-full md:ml-64 p-4 sm:p-6 lg:p-8 space-y-6 bg-slate-100">
            
         @yield('content')

        </main>
    </div>

   @include('backend.include.footer')

    <!-- Marquee Animation CSS -->
    <style>
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
    </style>

</body>
</html>