<section id="contact" x-data="contact" class="min-h-screen flex flex-col justify-center text-white">
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
        <div
            class="max-w-lg mx-auto gap-12 justify-between lg:flex lg:max-w-none"
        >
            <div class="max-w-lg space-y-3">
                <h2 class="text-4xl font-bold mb-10">Prenons contact!</h2>
                <div class="flex flex-col gap-10">
                    <p>
                        Vous avez un projet en tête et vous ne savez pas comment le concrétiser?<br><br>Vous souhaitez en discuter ou simplement dire bonjour ?<br></br>N'hésitez pas à me contacter.<br> je serai ravi de répondre à toutes vos questions!
                    </p>
                </div>

                <div>
                    <ul class="mt-6 flex flex-wrap gap-x-10 gap-y-6 items-center">
                        <template
                            x-for="(item, index) in contactMethods"
                            :key="index"
                        >
                            <li class="flex items-center gap-x-3">
                                <div
                                    class="flex-none"
                                    x-html="item.icon"
                                ></div>
                                <p x-text="item.contact"></p>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
            <div class="flex-1 sm:max-w-lg lg:max-w-md">
                <form @submit.prevent class="space-y-5">
                    <div class="grid grid-cols-6 md:grid-cols-12 gap-4">
                        <div class="col-span-6">
                            <label for="civility" class="font-medium"> Civilité</label>
                            <select wire:model.live="civility" name="civility" class="w-full mt-2 px-3 py-2 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg {{ $errors->has('lastname') ? 'border-red-500' : '' }}">
                                <option>Monsieur</option>
                                <option value="Mme">Madame</option>
                            </select>
                            @error('civility') <span class="absolute text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-span-6">
                            <label for="lastname" class="font-medium"> Nom de famille</label>
                            <input
                                wire:model.live="lastname"
                                name="lastname"
                                placeholder="Dupont"
                                type="text"
                                class="w-full mt-2 px-3 py-2 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg {{ $errors->has('lastname') ? 'border-red-500' : '' }}"
                            />
                            @error('lastname') <span class="absolute text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-6 md:grid-cols-12 gap-4">
                        <div class="col-span-6">
                            <label for="firstname" class="font-medium"> Prénom</label>
                            <input
                                wire:model.live="firstname"
                                name="firstname"
                                placeholder="Pierre"
                                type="text"
                                class="w-full mt-2 px-3 py-2 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg {{ $errors->has('firstname') ? 'border-red-500' : '' }}"
                            />
                            @error('firstname') <span class="absolute text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-span-6">
                            <label for="company" class="font-medium"> Entreprise </label>
                            <input
                                wire:model.live="company"
                                name="company"
                                placeholder="Dupont company"
                                type="text"
                                class="w-full mt-2 px-3 py-2  bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg {{ $errors->has('company') ? 'border-red-500' : '' }}"
                            />
                            @error('company') <span class="absolute text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div>
                        <label for="email" class="font-medium"> Adresse mail </label>
                        <input
                            wire:model.live="email"
                            name="email"
                            placeholder="pierre.dupont@gmail.com"
                            type="email"
                            class="w-full mt-2 px-3 py-2 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg {{ $errors->has('email') ? 'border-red-500' : '' }}"
                        />
                        @error('email') <span class="absolute text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="phone" class="font-medium">
                            Phone number
                        </label>
                        <input
                            wire:model.live="phone"
                            name="phone"
                            type="text"
                            placeholder="+33 6 05 15 31 94"
                            class="w-full mt-2 px-3 py-2 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg {{ $errors->has('phone') ? 'border-red-500' : '' }}"
                        />
                        @error('phone') <span class="absolute text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="message" class="font-medium"> Message </label>
                        <textarea
                            wire:model.live="message"
                            name="message"
                            placeholder="Bonjour, je m'appelle Pierre Dupont et je suis le fondateur de Dupont company.&#10;Je souhaiterais discuter avec vous de mon projet de création d'une application web."
                            class="w-full mt-2 h-36 px-3 py-2 resize-none appearance-none bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg {{ $errors->has('message') ? 'border-red-500' : '' }}"
                        ></textarea>
                        @error('message') <span class="absolute text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <button
                        wire:click.prevent="sendMessage"
                        class="w-full px-4 py-2 font-medium bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-600 rounded-lg duration-150"
                    >
                        Envoyer
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@script
<script>
    $wire.on('email-sent', () => {
        Swal.fire({
            title: 'Message envoyé',
            text: 'Votre message a bien été envoyé, je vous répondrai dans les plus brefs délais.',
            icon: 'success',
            confirmButtonText: 'Fermer'
        })
        $wire.firstname=''
        $wire.lastname=''
        $wire.company=''
        $wire.email=''
        $wire.phone=''
        $wire.message=''
    })
    Alpine.data('contact', () => ({
        contactMethods: [
            {
                icon: `
              <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                  <path stroke-linecap='round' stroke-linejoin='round' d='M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75' />
              </svg>
          `,
                contact: 'support@x-mathias.dev'
            },
            {
                icon: `
              <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                  <path stroke-linecap='round' stroke-linejoin='round' d='M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z' />
              </svg>
          `,
                contact: '+33 6 05 15 31 94'
            },
            {
                icon: `
              <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                  <path stroke-linecap='round' stroke-linejoin='round' d='M15 10.5a3 3 0 11-6 0 3 3 0 016 0z' />
                  <path stroke-linecap='round' stroke-linejoin='round' d='M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z' />
              </svg>
          `,
                contact: '69100 Villeurbanne, France'
            }
        ]
    }))
</script>
@endscript
