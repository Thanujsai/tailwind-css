<section id="test">
    <x-layout>
        {{-- hero --}}
        <div class="container flex items-start px-12 py-10 mx-auto space-y-2">
            {{-- left side --}}
            <div class="md:w-1/2 space-y-20">
                <div class="flex flex-col space-y-6">
                    <h1 class="text-lg">Hi, There!</h1>
                    <p class="uppercase text-8xl text-black font-bebas-neue">
                        <span class="text-orange-600">MANAGE</span> is here to be your assistance
                    </p>
                    

                    <p>I am here ready to help you in making creative digital products</p>

                    <button class="p-3 px-6 pt-2 text-white bg-orange-600 rounded-full baseline border border-orange-600 transition-all duration-300 hover:bg-white hover:text-orange-600 max-w-40 cursor-pointer">
                        Get Started
                    </button>
                </div>

                <div class="space-y-7">
                    <h1 class="text-2xl uppercase font-bebas-neue">Our Service</h1>

                <div class="flex space-x-24">
                    <div class="flex flex-col space-y-6 w-full">
                        <img src="/img/illustration-intro.svg" alt="" class="w-full">
                        <h1 class="text-l">Branding</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                    </div>
                    <div class="flex flex-col space-y-6 w-full">
                        <img src="/img/illustration-intro.svg" alt="" class="w-full">
                        <h1 class="text-l">UI/UX</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                    </div>
                    <div class="flex flex-col space-y-6 w-full">
                        <img src="/img/illustration-intro.svg" alt="" class="w-full">
                        <h1 class="text-l">Product Design</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                    </div>
                </div>
                </div>
            </div>

            {{-- right side image --}}
            <div class="md:w-1/2">
                <img src="/img/illustration-intro.svg" alt="">
            </div>
        </div>

    </x-layout>
</section>
