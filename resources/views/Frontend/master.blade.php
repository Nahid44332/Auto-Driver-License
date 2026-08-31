<!DOCTYPE html>
<html lang="bn" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>অটোরিকশা ডিজিটাল লাইসেন্স পোর্টাল</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Hind Siliguri', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">



    <!-- Navbar -->
    @include('Frontend.include.navbar')

   @yield('content')

    <!-- Footer -->
    @include('Frontend.include.footer')

</body>

</html>
