<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Jeune développeur web fullstack en freelance, spécialisé en PHP - Laravel. Contactez-moi dès à présent pour discuter de votre projet.">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="canonical" href="https://x-mathias.dev">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ 'Développeur web freelance Laravel - Mathias SUCHAIL' }}@isset($tittle) - {{ $title }}@endisset</title>
    </head>
    <body class="bg-black text-gray-200 font-raleway">
        <!-- Navigation -->
        <nav class="w-full fixed top-0 z-50 bg-black bg-opacity-75 border-b border-b-indigo-500">
            <div class="container mx-auto flex justify-center md:justify-between items-center py-4">
                <a href="#" class="text-white text-xl font-bold"><span class="text-red-500">< </span>x-mathias.dev<span class="text-red-500"> /></span></a>

                <ul class="md:flex flex-row gap-5 items-center hidden" x-data="step">
                    <template x-for="(item, idx) in stepsItems" :key="idx">
                        <li :class="activeSection(item.id) ? 'text-white' : 'text-indigo-600'" class="text-gray-200 hover:text-white"><a :href="'#' + item.id" x-text="item.name"></a></li>
                    </template>
                </ul>
            </div>
        </nav>

        <!-- Content -->
        {{ $slot }}

        <!-- Footer -->
{{--        <footer class="py-6 bg-black text-center text-gray-200">
        </footer>--}}
    </body>
</html>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('step', () => ({
            stepsItems: [
                {
                    name: 'Profile',
                    id: 'profile'
                },
                {
                    name: 'Présentation',
                    id: 'about'
                },
                {
                    name: 'Compétences',
                    id: 'skills'
                },
                {
                    name: 'Contact',
                    id: 'contact'
                }


            ],
            y:document.documentElement.scrollTop || document.body.scrollTop,

            init() {
                window.onscroll = () => {
                    this.y = document.documentElement.scrollTop || document.body.scrollTop;
                }
            },

            activeSection(id) {
                return this.y >= document.getElementById(id).offsetTop - window.innerHeight / 2 && this.y < document.getElementById(id).offsetTop + document.getElementById(id).offsetHeight /2;
            }
        }))
    })
</script>
