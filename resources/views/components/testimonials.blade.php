<section id="testimonials">
    {{-- contrainer to heading and testimonial blocks --}}
    <div class="max-w-6xl px-5 mx-auto mt-32 text-center">{{-- max-w-6xl: Sets a maximum width of 6xl (96rem) for the container, ensuring it doesn't stretch too wide on larger screens. --}}
        <h2 class="text-4xl font-bold text-center">
            What's Different About Manage?
        </h2>
        {{-- Testimonials Container --}}
        <div class="flex flex-col mt-24 md:flex-row md:space-x-6">{{--flex-col: This makes the items stack vertically on small screens. md:flex-row: On medium screens and larger, the items will be arranged in a row. --}}
            {{-- Testimonial 1 --}}
            <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-gray-100 md:w-1/3">
                <img src="img/avatar-anisha.png"  class="w-16 -mt-14"/>{{-- -mt-14: This negative margin-top pulls the image up, overlapping the top of the card. --}}
                <h5 class="text-lg font-bold">Anisha Li</h5>
                <p class="text-sm">
                    “Manage has supercharged our team’s workflow. The ability to maintain visibility on larger milestones at all times keeps everyone motivated.”
                </p>
            </div>

            {{-- Testimonial 2 --}}
            <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-gray-100 md:flex md:w-1/3">
                <img src="img/avatar-ali.png"  class="w-16 -mt-14"/>
                <h5 class="text-lg font-bold">Ali Bravo</h5>
                <p class="text-sm">
                    “We have been able to streamline our workflow using Manage. The ability to maintain visibility on larger milestones at all times keeps everyone motivated.”
                </p>
            </div>

            {{-- Testimonial 3 --}}
            <div class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-gray-100 md:flex md:w-1/3">
                <img src="img/avatar-richard.png"  class="w-16 -mt-14"/>
                <h5 class="text-lg font-bold">Richard Watts</h5>
                <p class="text-sm">
                    “Manage allows us to provide structure and process. It keeps us organized and focused. I can’t recommend it enough!”
                </p>
            </div>

        </div>

        {{-- Button --}}
        <div class="my-16">
            <a href="" class="p-3 px-6 pt-2 text-white bg-orange-600 hover:bg-orange-500 rounded-full baseline"><!--block : Takes up the full width of its parent container by default-->
                Get Started
            </a>
        </div>
    </div>
</section>