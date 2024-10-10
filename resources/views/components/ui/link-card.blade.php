@props(['url', 'title', 'imageUrl', 'alt'])

<a href="{{ $url }}" class="shadow-5xl shadow-indigo-600/50 bg-slate-950 py-6 px-4 rounded-lg flex flex-col items-center justify-between gap-3 md:gap-12 hover:scale-105 transition-all delay-100 ease-in hover:bg-indigo-950 ring-1 ring-indigo-600 hover:ring-indigo-300">
    @isset($title)
        <x-ui.title.h3>{{ $title }}</x-ui.title.h3>
    @endisset
    @isset($imageUrl)
        <img src="{{ asset($imageUrl) }}" alt="{{ $alt }}" class="w-12 md:w-24 rounded-lg">
    @endisset
    <x-ui.paragraph>{{ $slot }}</x-ui.paragraph>
</a>
