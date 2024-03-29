<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="welcome to Soul Lift! This is a haven of emotional well-being, a space where you become a part of a community rooted in shared experiences, boundless compassion, and the unbreakable spirit of growth. Life's journey is peppered with trials and tribulations, shaping us through both darkness and transformation. ">
    <meta name="keywords" content="soullift,Soul Lift,Greetings, souls, welcome,emotional,well-being">
    <link rel="canonical" href="https://www.soullift.info">
    <meta name="robots" content="index, follow">
    <!-- Open Graph (OG) Meta Tags -->
    <meta property="og:title" content="Home">
    <meta property="og:description" content="welcome to Soul Lift! This is a haven of emotional well-being, a space where you become a part of a community rooted in shared experiences, boundless compassion, and the unbreakable spirit of growth. Life's journey is peppered with trials and tribulations, shaping us through both darkness and transformation.">
    <meta property="og:image" content="{{ asset('images/hero.png') }}">
    <meta property="og:url" content="https://www.soullift.info">
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Home">
    <meta name="twitter:description" content="welcome to Soul Lift! This is a haven of emotional well-being, a space where you become a part of a community rooted in shared experiences, boundless compassion, and the unbreakable spirit of growth. Life's journey is peppered with trials and tribulations, shaping us through both darkness and transformation.">
    <meta name="twitter:image" content="{{ asset('images/helo.png') }}">

    <title>Home</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!-- Scripts -->
   
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <x-header-component />
    <div class="relative isolate overflow-hidden bg-gray-900">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1"
                    patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
                <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                    stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
        </svg>
        <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
            aria-hidden="true">
            <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
            <div class="mx-auto max-w-3xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8 mt-5">
                <h1 class="text-2xl mt-24 font-bold tracking-tight text-amber-600 sm:text-4xl">{{ $biography->title }}
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">{{ $biography->description }}</p>
                <div class="mt-10 flex items-center gap-x-6">
                    <a href="/welcome-note"
                        class="rounded-md bg-amber-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                        Read more</a>

                </div>

            </div>
            <div
                class="mx-auto mt-5 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-5 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <img src="{{ asset('images/hero.png')}}" alt="{{ $biography->title }}"
                        class="w-full rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10 object-contain h-full w-full">
                </div>
            </div>
        </div>
    </div>

    <x-why-component/>
    <x-blog-component />
    
    <livewire:subscriber-component />
    <x-footer-component />
</body>

</html>