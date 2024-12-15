<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=roboto:300,500,700|space-mono:700" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="tracking-wider relative">
    <div class="min-h-screen text-neutral-700 bg-gray-100 dark:bg-black dark:text-white">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="max-w-6xl mx-auto py-6 px-5 sm:px-6 lg:px-0 md:pt-40 pt-28 pb-10">
            {{ $header }}
        </header>
        @endisset

        <!-- Page Content -->
        <main class="max-w-6xl mx-auto px-5 md:px-10 lg:px-0">
            {{ $slot }}
        </main>

        <footer class="max-w-6xl mx-auto mt-10 py-5 grid grid-cols-4">
            <div class="place-content-center">
                <h1>LOGO</h1>
                <div class="flex items-center gap-1">
                    <a href="#">
                        <img class="bg-white size-7 w-auto" src="{{ asset('images/x.png') }}" alt="X logo" />
                    </a>
                    <a href="#">
                        <img class="size-8 w-auto" src="{{ asset('images/whatsapp.png') }}" alt="X logo" />
                    </a>
                    <a href="#">
                        <img class="size-7 w-auto" src="{{ asset('images/IG.png') }}" alt="X logo" />
                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-bold">Business</h4>
                <div class="text-xs space-y-1 mt-1">
                    <a class="group w-fit flex items-center gap-1 hover:underline hover:text-primary transition-all duration-300 ease-in-out" href="/">
                        Home
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="transition-all duration-300 group-hover:visible invisible size-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>
                    </a>
                    <a class="group w-fit flex items-center gap-1 hover:underline hover:text-primary transition-all duration-300 ease-in-out" href="#">
                        About
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="transition-all duration-300 group-hover:visible invisible size-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>
                    </a>
                    <a class="group w-fit flex items-center gap-1 hover:underline hover:text-primary transition-all duration-300 ease-in-out" href="#">
                        Services
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="transition-all duration-300 group-hover:visible invisible size-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>
                    </a>
                    <a class="group w-fit flex items-center gap-1 hover:underline hover:text-primary transition-all duration-300 ease-in-out" href="#">
                        Shop
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="transition-all duration-300 group-hover:visible invisible size-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-bold">Services</h4>
                <div class="text-xs space-y-1 mt-1">
                    <a class="group w-fit flex items-center gap-1 hover:underline hover:text-primary transition-all duration-300 ease-in-out" href="/">
                        Pet Grooming
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="transition-all duration-300 group-hover:visible invisible size-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>
                    </a>
                    <a class="w-fit group flex items-center gap-1 hover:underline hover:text-primary transition-all duration-300 ease-in-out" href="#">
                        Dog sitting
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="transition-all duration-300 group-hover:visible invisible size-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>
                    </a>
                    <a class="group w-fit flex items-center gap-1 hover:underline hover:text-primary transition-all duration-300 ease-in-out" href="#">
                        Dog walking
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="transition-all duration-300 group-hover:visible invisible size-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>

                    </a>
                    <a class="group w-fit flex items-center gap-1 hover:underline hover:text-primary transition-all duration-300 ease-in-out" href="#">
                        Pet Training
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="transition-all duration-300 group-hover:visible invisible size-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>

                    </a>
                    <a class="group w-fit flex items-center gap-1 hover:underline hover:text-primary transition-all duration-300 ease-in-out" href="#">
                        Pet Consultation
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="transition-all duration-300 group-hover:visible invisible size-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>

                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-bold">Contact</h4>
                <div class="text-xs space-y-1 mt-1">
                    <p>
                        Tel: xxx-(xxx)-xxx
                    </p>
                    <p>
                        Email: example@gmail.com
                    </p>
                    <p class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                        </svg>
                        Parkson Ave., LongField Road.
                    </p>
                </div>
            </div>

        </footer>
    </div>
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>