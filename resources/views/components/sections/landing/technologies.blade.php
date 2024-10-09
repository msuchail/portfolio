<section id="skills" class="bg:black md:py-0">
    <div class="container mx-auto text-center flex flex-col justify-center min-h-screen gap-24 px-24 md:px-6">
        <div class="flex flex-col gap-6">
            <h2 class="text-white text-4xl font-bold">Stack technique</h2>
            <p class="text-gray-200">Spécialisé dans la TALL Stack (Tailwind CSS, Alpine.js, Laravel, Livewire), je conçois des interfaces web modernes et dynamiques. Grâce à ces technologies, je développe des applications dynamiques avec une expérience alliant design responsive et performance optimale.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
            <x-ui.link-card url="https://laravel.com/" title="Laravel" imageUrl="images/laravel.png" alt="Laravel">
                Framework PHP pour des applications évolutives, sécurisées et performantes
            </x-ui.link-card>

            <x-ui.link-card url="https://laravel-livewire.com/" title="Livewire" imageUrl="images/livewire.png" alt="Livewire">
                Framework Laravel pour des applications web dynamiques sans JavaScript
            </x-ui.link-card>
            <x-ui.link-card url="https://alpinejs.dev/" title="Alpine.js" imageUrl="images/alpine.png" alt="Alpine.js">
                Framework javascript minimaliste intégré à l'écosystème Laravel
            </x-ui.link-card>
            <x-ui.link-card url="https://tailwindcss.com/" title="Tailwind CSS" imageUrl="images/tailwind.png" alt="Tailwind CSS">
                Framework CSS pour des designs modernes et personnalisables
            </x-ui.link-card>
            <x-ui.link-card url="https://docker.com/" title="Docker" imageUrl="images/docker.png" alt="Docker">
                Plateforme de conteneurisation pour des environnements de développement isolés
            </x-ui.link-card>
        </div>
        <div>
            <x-ui.button link="#contact">
                Me contacter
            </x-ui.button>
        </div>
    </div>
</section>
