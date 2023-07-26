<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ trans('blog.site_title') }}</title>

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
        <main class="h-full mb-20 relative max-w-[52rem] mx-auto px-4 sm:px-6 md:px-8 xl:px-12 lg:max-w-7xl md:w-auto">

            <div class="lg:max-w-[52rem] mx-auto mb-20">
                <h1 class="font-extrabold text-3xl md:text-5xl md:leading-snug -mt-3">{{ $post->title }}</h1>

                <p class="mt-5 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                    <span>{{ $post->created_at }}</span>
                    <span
                        class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">5
                        min read</span>
                </p>
            </div>

            <article class="mx-auto md:mb-44 prose text-black md:prose-lg">
                {!! $post->body !!}
                <hr>

                <div class="flex items-center not-prose">
                    <img src="https://themsaid.com/img/avatar.png" alt=""
                        class="w-10 md:w-32 rounded-full md:mr-5">
                    <p class="pl-5 text-sm md:text-lg">
                        I'm
                        <span class="font-medium">{{ $post->author->name}}</span>. I work with companies and teams all over the
                        world to build and scale web applications in the cloud.
                        Find me on twitter <a href="https://twitter.com/themsaid" target="_blank">@themsaid</a>.
                    </p>
                </div>

            </article>

        </main>

        <livewire:subscriber-component />
    </div>

</body>

</html>
