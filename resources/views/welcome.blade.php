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
        <x-header-component />
        <div class="relative isolate overflow-hidden bg-gray-900 pt-14">

            <div class="mx-auto max-w-7xl px-6 py-32 sm:py-40 lg:px-8">
                <div
                    class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                    <h1
                        class="max-w-xl text-xl font-bold tracking-tight text-clip text-amber-600 sm:text-6xl lg:col-span-2 xl:col-auto">
                        {{ $biography->title }}.</h1>
                    <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
                        <p class="text-lg leading-8 text-white">{{ $biography->description }}</p>
                        <div class="mt-10 flex items-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-amber-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                                Read more</a>

                        </div>
                    </div>
                    <img src="{{ asset('images/Lysiane Byukusenge.webp')}}" alt=""
                        class="mt-0 aspect-[4/5] w-full max-w-lg rounded-2xl object-cover sm:mt-0 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-0">
                </div>
            </div>
            
        </div>
        <x-blog-component />

        <livewire:subscriber-component />

    </div>
    <x-footer-component />
</body>

</html>