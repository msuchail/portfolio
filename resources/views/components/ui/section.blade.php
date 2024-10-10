<section {{ $attributes->merge(['class' => 'container mx-auto flex flex-col justify-center items-center min-h-screen gap-24 md:px-24 px-6 pb:10 pt-20']) }}>
    <div class="flex flex-col gap-10 h-full items-center justify-center">
        {{ $slot }}
    </div>
</section>
