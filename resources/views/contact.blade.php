<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Don't hesitate to contact soullift anytime and engage with our social media where we share daily contents.">
    <meta name="keywords" content="Greetings, souls, welcom,emotional,well-being,contact-us,contact">
    <link rel="canonical" href="https://www.soullift.info/welcome-note">
    <meta name="robots" content="index, follow">
    <!-- Open Graph (OG) Meta Tags -->
    <meta property="og:title" content="Contact">
    <meta property="og:description" content="Don't hesitate to contact soullift anytime and engage with our social media where we share daily contents.">
    <meta property="og:image" content="{{ asset('images/hero.png') }}">
    <meta property="og:url" content="https://www.soullift.info/contact-us">
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact">
    <meta name="twitter:description" content="Don't hesitate to contact soullift anytime and engage with our social media where we share daily contents.">
    <meta name="twitter:image" content="{{ asset('images/hero.png') }}">

    <title>Contact</title>

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
        
        <div class="mx-auto max-w-7xl py-12 text-left sm:pt-40  lg:px-8">
            <h2 class="text-4xl font-bold tracking-tight text-amber-600 sm:text-3xl">Contact us</h2>
            
        </div>
        
        <div class="mx-auto max-w-7xl py-12 text-left sm:pt-20  lg:px-8">
            <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3">
                <div>
                    <p class="mt-4 leading-7 text-white">Reach out to us by using the following channels.</p>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">

                    <div class="bg-gray-50 p-4 rounded-lg shadow-md flex items-center">
                        <div class="bg-gray-900 p-5 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                            </svg>
                        </div>
                        <span class="text-lg font-semibold"> <a class="font-semibold text-gray-900" href="mailto:{{ $biography->email }}">{{ $biography->email }}</a></span>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg shadow-md flex items-center">
                        <div class="bg-gray-900 p-5 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>

                        </div>
                        <span class="text-lg font-semibold"> <a class="font-semibold text-gray-900" href="{{ $biography->twitter }}" target="_blank">X(Twitter)</a></span>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg shadow-md flex items-center">
                        <div class="bg-gray-900 p-5 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="w-6 h-6 text-white" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </div>
                        <span class="text-lg font-semibold"> <a class="font-semibold text-gray-900" href="{{ $biography->instagram }}" target="_blank">Instagram</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:subscriber-component />
    <x-footer-component />
</body>

</html>