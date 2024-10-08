<section
    x-data="hero"
    id="hero"
    class="bg-gradient-to-br from-black to-indigo-950 min-h-screen flex items-center justify-center p-4 md:pt-52">
        <div class="flex flex-col gap-12 h-full items-center justify-center md:w-1/2">
            <a href="#about">
                <img id="hero-image" tooltip="sdfsqdf" class="w-72 rounded-xl shadow-3xl brightness-75 hover:brightness-100 transition-all hover:scale-105 delay-200" src="{{ asset('images/mathias.jpg') }}" alt="Picture of Mathias, the Laravel Developer">
            </a>
            <div class="flex flex-col items-center justify-between gap-12">
                <h1 class="text-white text-2xl md:text-3xl font-extrabold">Développeur freelance Laravel</h1>
                <p class="text-gray-300 text-lg text-center">Jeune développeur passionné par le web et spécialisé dans la TALL stack (Tailwind, Alpine.js, Laravel et Livewire),<br>
                    je suis le freelance qu'il vous faut pour transformer dés à présent vos idées en réalité !</p>
                <x-ui.button link="#about">
                    En savoir plus
                </x-ui.button>
            </div>
        </div>
</section>

@script
<script>
    Alpine.data('hero', () => ({

    }))
</script>
@endscript
