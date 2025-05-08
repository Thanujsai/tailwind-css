<section id="hero">
    <!-- Flex Container -->
    <div class="container flex flex-col items-center px-20 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row">{{--images is the second item and i need images to be displayed in smaller screens -> flex-col-reverse--}}
        <!-- Left Side -->
        <div class="flex flex-col mb-32 space-y-12 md:w-1/2">{{--md:w-1/2: On medium screens and larger, the left section takes up 50% of the container’s width.--}}
            <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                Bring everyone together to build better products.
            </h1>
            <p class="max-w-sm text-center text-gray-700 md:text-left">
                Manage makes it simple for software teams to plan day-to-day tasks
                while keeping the larger team goals in view.
            </p>
            <div class="flex justify-center md:justify-start">
                <a href="" class="p-3 px-6 pt-2 text-white bg-orange-600 hover:bg-orange-500 rounded-full baseline"><!--block : Takes up the full width of its parent container by default-->
                    Get Started
                </a>
            </div>
        </div>

        <!--image-->
        <div class="md:w-1/2">
            <img src="/img/illustration-intro.svg" alt="" class="">
        </div>
    </div>
</section>

{{-- 
    md:flex-row
This makes the two inner <div>s (left content and image) sit side by side on medium screens and up.

They're now horizontal siblings.

The left side has md:w-1/2, meaning:

On medium screens and larger, the left section takes up 50% of the container’s width.

The image div (right side) has no width specified, so it takes up the remaining space.

 flex-col-reverse
flex: Makes the container a flexbox.

col-reverse: Lays out the child items vertically but in reverse order (bottom-to-top).
So on small screens, your two items (left content and image) stack vertically, but the image appears above the text.
--}}