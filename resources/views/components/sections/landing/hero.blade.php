<x-ui.section :id="$id" class="bg-transparent">
    <x-ui.title.h1 class="pt-4">{{ __('content.hero_h1') }}</x-ui.title.h1>
    <a href="#about">
        <img id="hero-image" tooltip="sdfsqdf" class="w-60 md:w-72 rounded-xl shadow-3xl transition-all hover:scale-105 delay-200" src="{{ asset('images/mathias.jpg') }}" alt="Photo de Mathias le développeur">
    </a>
    <x-ui.title.h2>Mathias SUCHAIL</x-ui.title.h2>
    <div class="flex flex-col items-center justify-between gap-12">
        <x-ui.paragraph>
            {!! __('content.hero_p') !!}
        </x-ui.paragraph>
        <x-ui.button link="#about">
            {{ __('En savoir plus') }}
        </x-ui.button>
    </div>
</x-ui.section>
