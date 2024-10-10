<x-ui.section :id="$id">
        <div class="flex flex-col gap-6">
            <x-ui.title.h2>Stack technique</x-ui.title.h2>
            <x-ui.paragraph class="text-gray-200">Spécialisé dans la TALL Stack (Tailwind CSS, Alpine.js, Laravel, Livewire), je conçois des interfaces web modernes et dynamiques. Grâce à ces technologies, je développe des applications dynamiques avec une expérience alliant le design responsive à une performance optimale.</x-ui.paragraph>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-5 gap-6 px-6 w-full">
            <x-ui.link-card url="https://laravel.com/" title="Laravel" imageUrl="images/laravel.png" alt="Laravel">
                Framework PHP
            </x-ui.link-card>

            <x-ui.link-card url="https://laravel-livewire.com/" title="Livewire" imageUrl="images/livewire.png" alt="Livewire">
                Package Laravel
            </x-ui.link-card>
            <x-ui.link-card url="https://alpinejs.dev/" title="Alpine.js" imageUrl="images/alpine.png" alt="Alpine.js">
                Framework javascript
            </x-ui.link-card>
            <x-ui.link-card url="https://tailwindcss.com/" title="Tailwind CSS" imageUrl="images/tailwind.png" alt="Tailwind CSS">
                Framework CSS
            </x-ui.link-card>
            <x-ui.link-card url="https://docker.com/" title="Docker" imageUrl="images/docker.png" alt="Docker">
                Conteneurisation
            </x-ui.link-card>
        </div>
        <div>
            <x-ui.button link="#contact">
                Me contacter
            </x-ui.button>
        </div>
</x-ui.section>
