<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! SEO::generate() !!}

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
    <title>Blog</title>
</head>

<body class="antialiased">
    <div class="bg-gray-900">
        <x-header-component />

        <main
            class="h-full mb-20 relative max-w-[52rem] mx-auto px-4 sm:px-6 md:px-8 xl:px-12 lg:max-w-7xl md:w-auto">

            <div class="mb-16 md:mb-36 flex mt-20">
                <div class="md:w-3/4 text-md md:text-lg md:leading-8 mt-24">
                    <h1 class="text-4xl md:text-6xl font-extrabold text-amber-700">{{ $category->title }}
                    </h1>

                </div>
            </div>

            <div class="md:flex">
                <div class="md:w-2/3">
                    <div class="mr-0 md:mr-20">
                        <h2
                            class="mb-5 md:mb-10 flex items-center after:ml-4 after:bg-amber-700 after:h-px after:w-1/2 after:grow uppercase text-xs font-medium text-amber-700">
                            {{ $category->title }}
                        </h2>

                        <div class="mx-auto max-w-2xl lg:max-w-4xl">
                            <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
                                @foreach ($posts as $post)
                                <article class="relative isolate flex flex-col gap-8 lg:flex-row">
                                    <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                                        @if($post->featured_image)
                                        <img src="{{ $post->featured_image->getUrl('preview') }}" alt="{{ $post->title}}" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                                        @endif
                                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-x-4 text-xs">
                                            <time datetime="{{ $post->created_at->format('M d, Y') }}" class="text-white">{{ $post->created_at->format('M d, Y') }}</time>
                                            <p class="relative z-10 rounded-full bg-white px-3 py-1.5 font-medium text-gray-900 hover:bg-amber-600">{{ $post->category->title }}</p>
                                        </div>
                                        <div class="group relative max-w-xl">
                                            <h3 class="mt-3 text-lg font-semibold leading-6 text-white group-hover:text-amber-600">
                                                <a href="{{ route('blog.show',$post->slug)}}"><span class="absolute inset-0"></span>{{ $post->title }}</a>
                                            </h3>
                                            <p class="mt-5 text-sm leading-6 text-white">{!!Str::limit($post->body,250) !!}</p>
                                        </div>
                                        <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                                            <div class="relative flex items-center gap-x-4">
                                                <img src="{{ asset('images/hero.png')}}" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                                                <div class="text-sm leading-6">
                                                    <p class="font-semibold text-white">
                                                        <a href="#">
                                                            <span class="absolute inset-0"></span>
                                                            {{ $post->author->name }}
                                                        </a>
                                                    </p>
                                                    <p class="text-white">Author</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                            class="mb-5 md:mb-10 flex items-center after:ml-4 after:bg-amber-700 after:h-px after:w-1/2 after:grow uppercase text-xs font-medium text-amber-700">
                            Topics
                        </h2>

                        <div>
                            @foreach($categories as $category)
                            <a href="{{ route('category.show',$category->slug)}}" class="flex items-center mb-5 block text-white">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
</svg>
                                <h3 class="text-sm md:text-md font-medium text-white ml-4">{{ $category->title}}</h3>
                                <span
                                    class="rounded-full text-white invisible md:visible border border-gray-200 text-xs px-2 py-1 ml-auto">{{ $category->posts->count()}}
                                    posts</span>
                            </a>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>

        </main>

        <livewire:subscriber-component />
    </div>
<x-footer-component/>
</body>

</html>