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
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
            <img src="{{ asset('images/tembera 250 blog header.jpg') }}" alt=""
                class="absolute inset-0 -z-10 h-full w-full object-cover" style="opacity: 0.5 !important;">
            <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
                aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
                aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="min-w-0 flex-1">
                        <h1 class="text-2xl font-bold leading-7 text-white sm:truncate sm:text-3xl sm:tracking-tight">
                            Blog</h1>

                    </div>


                </div>
            </div>
        </div>
        <main class="h-full mb-20 relative max-w-[52rem] mx-auto px-4 sm:px-6 md:px-8 xl:px-12 lg:max-w-7xl md:w-auto">

            <div class="mb-16 md:mb-36 flex">
                <div class="md:w-3/4 text-md md:text-lg md:leading-8">
                    <h1 class="text-4xl md:text-6xl font-extrabold text-indigo-600">Software design and infrastructure
                    </h1>
                    <p class="mt-5">
                        Hello there, I work with companies and teams all over the world to build and scale web
                        applications in the cloud.
                        <span class="invisible md:visible">Among my favorite tech stacks are PHP, GoLang, and
                            JavaScript.</span>
                    </p>

                    <p class="mt-5">
                        In here, I discuss my thoughts on building and running web applications.
                        It's a pleasure to meet you.
                    </p>
                </div>
            </div>

            <div class="md:flex">
                <div class="md:w-2/3">
                    <div class="mr-0 md:mr-20">
                        <h2
                            class="mb-5 md:mb-10 flex items-center after:ml-4 after:bg-gray-300 after:h-px after:w-1/2 after:grow uppercase text-xs font-medium">
                            Content
                        </h2>

                        <a href="https://themsaid.com/using-golangs-coroutines-to-handle-laravel-jobs"
                            class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">Using GoLang's coroutines to handle Laravel jobs
                            </h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                We have a job that is dispatched over 50 million times per day in one of the Laravel
                                applications I manage. I needed to start more Laravel workers to ensure these jobs were
                                processed in a timely manner. However, starting too many processes may consume all of
                                the machine's available memory. In this post, I'll show you how I used Go's coroutines
                                to handle multiple jobs at the same time on the same machine.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>Jun 6, 2023</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">8
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/defensive-programming-the-byzantine-generals-problem"
                            class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">Defensive programming: the byzantine generals
                                problem</h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                Anything that can go wrong will go wrong. In software development, many things can go
                                wrong. A developer must be familiar with the various components of software and the
                                communication paths that connect them.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>May 24, 2023</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">6
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/artificial-intelligence-future-of-programming"
                            class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">AI and the future of programming as a profession
                            </h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                My predictions for programmers' future in 2030. When AI is sufficiently trained to
                                create the majority of software tools and businesses.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>May 22, 2023</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">5
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/the-six-dollar-vps" class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">The six-dollar VPS</h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                Most startups' and indie hackers' web apps can run on DigitalOcean's $6 VPS. It's
                                inexpensive, dependable, and effective. In this post we will look into what you can get
                                with a six-dollar VPS.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>May 17, 2023</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">5
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/code-on-go-with-php" class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">Explaining the code on the "Go with PHP" website
                            </h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                In this post, I'm going to share with you a breakdown of how the code on gowithphp.com
                                runs while refactoring it to make it more performant and less error prone.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>May 15, 2023</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">9
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/go-with-php" class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">Go with PHP</h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                If you haven't seen PHP code in a while, let me show you how it looks like in 2023. PHP
                                has become faster, more secure, and more enjoyable to use. More importantly, development
                                became more active. PHP is now a technology that can keep up.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>May 10, 2023</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">2
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/asynchronous-php" class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">Asynchronous PHP — Multiprocessing, Multithreading
                                &amp; Coroutines</h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                PHP code is blocking, meaning that one block of code will not run until the block prior
                                to it has finished. In this post, we will look at our options for running PHP code
                                asynchronously.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>Mar 26, 2021</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">5
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/rationing-your-laravel-queue-workers-memory-and-cpu-consumption"
                            class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">Rationing Laravel's queue workers memory &amp; CPU
                                consumption</h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                If you're running your queue workers on a server with limited resources, or a server
                                that's also used to serve HTTP requests and do other tasks, it's important to ration the
                                resource used by the workers. Let's see how we can do that.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>Mar 10, 2021</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">2
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/common-issues-that-cause-laravels-queue-workers-not-to-restart"
                            class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">Common issues that cause Laravel's queue workers
                                not to restart</h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                If the worker doesn't exit after a restart signal and you checked its status, you'll
                                find the uptime much longer. If that's the case, here are a couple of things to check.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>Feb 19, 2021</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">2
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/avoiding-memory-leaks-when-running-laravel-queue-workers"
                            class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">Avoiding memory leaks when running Laravel's queue
                                workers</h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                Avoiding memory leaks can be a bit challenging. Over time, some references will pile up
                                in the server memory that won't be detected by PHP. In this post, we'll look at our
                                options in dealing with this.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>Sep 21, 2020</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">1
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/queue-job-batching-in-laravel-how-it-works" class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">Job batching in Laravel: How it works</h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                Laravel 8 ships with a neat feature that allows us to dispatch a group of jobs to the
                                queue to be executed in parallel. In this post, we're going to look into how this works
                                under the hood.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>Sep 7, 2020</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">3
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/queue-workers-how-they-work" class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">Queue workers: How they work</h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                Understanding what happens under the hood when you run a queue worker.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>Sep 7, 2020</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">9
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/explaining-laravel-queue-configuration-keys"
                            class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">Explaining Laravel queue's configuration keys
                            </h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                In this series of video tweets, I've explained some of the most confusing Queue
                                configuration keys
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>Sep 1, 2020</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">1
                                    min read</span>
                            </p>
                        </a>
                        <a href="https://themsaid.com/preventing-scheduled-jobs-overlapping" class="mb-16 block">
                            <h2 class="font-bold text-xl md:text-3xl">How Laravel prevents your scheduled jobs from
                                overlapping</h2>

                            <p class="mt-4 md:leading-7 md:text-lg">
                                Sometimes a scheduled job takes more time to run than what we initially expected. In
                                most scenarios this is fine, but sometimes this should be prevented in order to
                                guarantee correct data or prevent a high server resources consumption, so let's see how
                                you can prevent such scenario in Laravel.
                            </p>

                            <p class="mt-4 uppercase text-xs inline-flex space-x-2 font-medium text-gray-500">
                                <span>Apr 1, 2018</span>
                                <span
                                    class="before:mr-2 before:bg-gray-400 before:w-[2px] before:h-[2px] before:rounded-full flex items-center">2
                                    min read</span>
                            </p>
                        </a>


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
                            <a href="https://themsaid.com/topic/programming-careers"
                                class="flex items-center mb-5 block">
                                <h3 class="text-sm md:text-md font-medium">Programming Careers</h3>
                                <span
                                    class="rounded-full invisible md:visible border border-gray-200 text-xs px-2 py-1 ml-auto">1
                                    posts</span>
                            </a>
                            <a href="https://themsaid.com/topic/architecture" class="flex items-center mb-5 block">
                                <h3 class="text-sm md:text-md font-medium">Architecture</h3>
                                <span
                                    class="rounded-full invisible md:visible border border-gray-200 text-xs px-2 py-1 ml-auto">1
                                    posts</span>
                            </a>
                            <a href="https://themsaid.com/topic/go-lang" class="flex items-center mb-5 block">
                                <h3 class="text-sm md:text-md font-medium">GoLang</h3>
                                <span
                                    class="rounded-full invisible md:visible border border-gray-200 text-xs px-2 py-1 ml-auto">1
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
