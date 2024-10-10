<div class="flex flex-col items-stretch text-center">
{{--    <x-ui.step />--}}
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-black to-indigo-950">
        <x-sections.landing.hero id="profile" />
    </div>

    <!-- About Section -->
    <div>
        <x-sections.landing.about id="about" />
    </div>

    <x-ui.separator />

    <!-- Technologies Section -->
    <div>
        <x-sections.landing.technologies id="skills" />
    </div>

{{--
    <!-- Projets Section -->
    <x-sections.landing.technologies />
--}}

    <!-- Contact Section -->
    <div>
        <x-sections.landing.contact id="contact" />
    </div>
</div>
