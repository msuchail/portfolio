@props(['url', 'title', 'imageUrl', 'alt'])

<a href="{{ $url }}" class="shadow-5xl shadow-indigo-600/50 bg-slate-950 p-6 rounded-lg flex flex-col items-center gap-12 hover:scale-105 transition-all delay-100 ease-in hover:bg-indigo-950 ring-1 ring-indigo-600 hover:ring-indigo-300">
    @isset($title)
        <h3 class="text-white text-2xl mt4">{{ $title }}</h3>
    @endisset
    @isset($imageUrl)
        <img src="{{ asset($imageUrl) }}" alt="{{ $alt }}" class="h-24 rounded-lg">
    @endisset
    <p class="text-gray-200">{{ $slot }}</p>
</a>
