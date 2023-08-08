<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! SEO::generate() !!}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="bg-white">
        <div class="container mx-auto mt-8 px-4">
    <div class="flex">
        <div class="w-1/4">
            <img src="https://via.placeholder.com/150" alt="Profile Image" class="rounded-full w-32 h-32 mx-auto border-4 border-white shadow-md">
            <h2 class="text-xl font-semibold mt-4">Life Coach Name</h2>
            <p class="text-gray-600">Certified Life Coach</p>
            <div class="mt-4">
                <a href="#" class="text-blue-500 hover:underline">Website</a>
                <span class="text-gray-600 mx-2">|</span>
                <a href="#" class="text-blue-500 hover:underline">Contact</a>
            </div>
        </div>
        <div class="w-3/4 ml-8">
            <h2 class="text-2xl font-semibold mb-4">About Me</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac suscipit velit. Vivamus dapibus justo at sem mattis blandit.</p>
            <h2 class="text-2xl font-semibold mt-6 mb-4">Services</h2>
            <ul class="list-disc list-inside">
                <li>Personal Growth Coaching</li>
                <li>Career Development Coaching</li>
                <li>Relationship Coaching</li>
                <!-- Add more services here -->
            </ul>
        </div>
    </div>
</div>
        <x-header-component />
        <livewire:subscriber-component />
    </div>
    <x-footer-component />
</body>
</html>