@props(['link'])

<a href="{{ $link }}" {{ $attributes->merge(['class'=>"hover:scale-105 transition-all delay-200 hover:shadow-2xl inline-block bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-indigo-700"]) }} >
    <button>{{ $slot }}</button>
</a>
