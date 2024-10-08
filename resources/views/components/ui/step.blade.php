<div class="fixed bottom-0 bg-opacity-75 py-2 w-full bg-slate-950 z-10">
    <div x-data="step" class="max-w-2xl mx-auto px-4 md:px-0">
        <ul aria-label="Steps" class="items-center text-indigo-400 font-medium hidden md:flex">
            <template x-for="(item, idx) in stepsItems" :key="idx">
                <li class="flex-1 last:flex-none flex md:items-center">
                    <div class="flex gap-x-3">
                        <ul class="h-8 flex items-center md:h-auto">
                            <li :class="{'text-sm': true, 'text-white': activeSection(item)}" class="text-xl"><a :href="'#' + item" x-text="item.charAt(0).toUpperCase() + item.slice(1)"></a></li>
                        </ul>
                    </div>
                    <div :class="{'flex-1 hidden md:block': true, 'md:hidden': idx + 1 == stepsItems.length}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5" stroke="currentColor" class="w-5 h-5 mx-auto text-gray-500">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </li>
            </template>
        </ul>
    </div>
</div>
@script
<script>
    Alpine.data('step', () => ({
        stepsItems: ['hero', 'about', 'work', 'contact'],
        y:document.documentElement.scrollTop || document.body.scrollTop,

        init() {
            window.onscroll = () => {
                this.y = document.documentElement.scrollTop || document.body.scrollTop;
            }
        },

        activeSection(id) {
            return this.y >= document.getElementById(id).offsetTop - window.innerHeight / 2;
        }
    }))
</script>
@endscript
