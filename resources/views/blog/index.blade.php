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

        <main
            class="h-full mb-20 relative max-w-[52rem] mx-auto px-4 sm:px-6 md:px-8 xl:px-12 lg:max-w-7xl md:w-auto mt-24">

            <div class="mb-16 md:mb-36 flex">
                <div class="md:w-3/4 text-md md:text-lg md:leading-8">
                    <h1 class="text-4xl md:text-6xl font-extrabold text-black">Blog
                    </h1>

                </div>
            </div>

            <div class="md:flex">
                <div class="md:w-2/3">
                    <div class="mr-0 md:mr-20">
                        <h2
                            class="mb-5 md:mb-10 flex items-center after:ml-4 after:bg-gray-300 after:h-px after:w-1/2 after:grow uppercase text-xs font-medium">
                            Blog
                        </h2>

                        <div class="mx-auto max-w-2xl lg:max-w-4xl">
                            <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
                                @foreach ($posts as $post)
                                <article class="relative isolate flex flex-col gap-8 lg:flex-row">
                                    <a href="{{ route('blog.show',$post->slug)}}">
                                        <div
                                            class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                                            <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                                                alt=""
                                                class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                                            <div
                                                class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-x-4 text-xs">
                                                <time datetime="2020-03-16" class="text-gray-500">{{ $post->created_at
                                                    }}</time>
                                                <a href=""
                                                    class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                                            </div>
                                            <div class="group relative max-w-xl">
                                                <h3
                                                    class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                                    <a href="{{ route('blog.show',$post->slug)}}">
                                                        <span class="absolute inset-0"></span>
                                                        {{ $post->title }}
                                                    </a>
                                                </h3>
                                                <p class="mt-5 text-sm leading-6 text-gray-600">{!!
                                                    Str::limit($post->body,
                                                    250) !!}</p>
                                            </div>
                                            <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                                                <div class="relative flex items-center gap-x-4">
                                                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="" class="h-10 w-10 rounded-full bg-gray-50">
                                                    <div class="text-sm leading-6">
                                                        <p class="font-semibold text-gray-900">
                                                            <a href="#">
                                                                <span class="absolute inset-0"></span>
                                                                {{ $post->author->name }}
                                                            </a>
                                                        </p>
                                                        <p class="text-gray-600">Co-Founder / CTO</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                                @endforeach


                                <!-- More posts... -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/3">
                    <div class="mr-0 md:mr-0">
                        <h2
                            class="mb-5 md:mb-10 flex items-center after:ml-4 after:bg-gray-300 after:h-px after:w-1/2 after:grow uppercase text-xs font-medium">
                            Topics
                        </h2>

                        <div>
                            <a href="https://themsaid.com/topic/php-laravel" class="flex items-center mb-5 block">
                                <h3 class="text-sm md:text-md font-medium">PHP &amp; Laravel</h3>
                                <span
                                    class="rounded-full invisible md:visible border border-gray-200 text-xs px-2 py-1 ml-auto">11
                                    posts</span>
                            </a>

                        </div>
                    </div>

                </div>
            </div>

        </main>

        <livewire:subscriber-component />
    </div>

</body>

</html>