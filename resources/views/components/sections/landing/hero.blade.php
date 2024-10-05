<section
    x-data="hero"
    id="hero"
    class="bg-gradient-to-br from-black to-indigo-950 h-screen flex items-center justify-center p-4 md:pt-52">
        <div class="flex flex-col gap-12 h-full items-center justify-center md:w-1/2">
            <a href="#about">
                <img id="hero-image" tooltip="sdfsqdf" class="w-72 rounded-xl shadow-3xl brightness-75 hover:brightness-100 transition-all hover:scale-105 delay-200" :class="showPicture || 'hidden'" src="{{ asset('images/mathias.jpg') }}" alt="Picture of Mathias, the Laravel Developer">
            </a>
            <div class="flex flex-col items-center justify-between gap-12">
                <h1 class="text-white text-2xl md:text-3xl font-extrabold">Bienvenue sur mon site</h1>
                <p class="text-gray-300 text-lg text-center">Passionné par le développement web et spécialisé en Laravel, je vous accompagne pour donner vie à vos projets.<br>
                    Transformez dés à présent vos idées les plus ambitieuses en réalité!</p>
                <a href="#work" class="hover:scale-105 transition-all delay-200 hover:shadow-2xl inline-block bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-indigo-700">Découvrir mes préstation</a>
            </div>
        </div>
</section>

@script
<script>
    import tippy from "tippy.js";

    Alpine.data('hero', () => ({
        showPicture: false,
        showH1: false,
        showH2: false,
        showCta: false,

        async init() {
            this.showPicture = true
            setTimeout(() => {
                this.showH1 = true
            }, 1000)
            setTimeout(() => {
                this.showH2 = true
            }, 2000)
            setTimeout(() => {
                this.showCta = true
            }, 3000)
        },

    }))
    tippy('#test', {
        content: "I'm a Tippy tooltip!",
    });
</script>
@endscript
