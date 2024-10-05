<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        @vite('resources/css/app.css')
        <title>{{ 'Développeur Fullstack Laravel' }}@isset($tittle) - {{ $title }}@endisset</title>
    </head>
    <body class="bg-black text-gray-400 font-raleway">
        <!-- Navigation -->
        <nav class="w-full fixed top-0 z-50 bg-opacity-75 bg-black">
            <div class="container mx-auto flex justify-center md:justify-between items-center py-4">
                <a href="#" class="text-white text-xl font-bold"><x-heroicon-c-code-bracket class="w-7 inline text-red-500" /> x-mathias.dev</a>

                <div class="md:flex flex-row gap-5 items-center hidden">
                    <a href="#hero" class="text-gray-400 hover:text-white">Hero</a>
                    <a href="#work" class="text-gray-400 hover:text-white ">Work</a>
                    <a href="#about" class="text-gray-400 hover:text-white">About</a>
                    <a href="#contact" class="text-gray-400 hover:text-white">Contact</a>
                </div>
            </div>
        </nav>

        <!-- Content -->
        {{ $slot }}

        <!-- Footer -->
        <footer class="py-6 bg-black text-center text-gray-400">
            <p>&copy; 2024 Mathias SUCHAIL</p>
        </footer>
    </body>
</html>
