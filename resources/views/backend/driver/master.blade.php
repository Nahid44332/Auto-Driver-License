<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ড্রাইভার ড্যাশবোর্ড - অটো লাইসেন্স বিডি</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Hind Siliguri', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 antialiased min-h-screen flex flex-col">

  @include('backend.driver.include.header')

    <!-- Main Wrapper with Sidebar and Content -->
    <div class="flex pt-16 flex-grow">
        
        <!-- Sidebar -->
        @include('backend.driver.include.Sidebar')

        <!-- Main Content Area -->
        <main class="flex-grow md:ml-64 p-6 sm:p-8 bg-gray-50 min-h-[calc(100vh-4rem)]">
            @yield('content')
        </main>
    </div>
<!-- Alpine.js CDN -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>