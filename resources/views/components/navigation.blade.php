<script src="../../js/script.js"></script>

<nav class="relative container mx-auto p-6"><!--to add margins in the left and right-->
        <!--Flex container -->
        <div class="flex items-center justify-between"><!--to put the items in the div in a row and center them-->
            <!--Logo -->
            <div class="pt-2">
                <a href="/"><img src="/img/logo.svg" alt=""></a>
            </div>

            <!--Menu items-->
            <div class="hidden md:flex space-x-6"><!--hidden	Hides the element by default (on all screen sizes), md:flex	From medium screens (≥768px) and up, apply display: flex. This overrides hidden. -->
                <a href="#" class="hover:text-red-400">Pricing</a>
                <a href="#" class="hover:text-red-400">Product</a>
                <a href="#" class="hover:text-red-400">About Us</a>
                <a href="#" class="hover:text-red-400">Careers</a>
                <a href="#" class="hover:text-red-400">Community</a>
                <a href="/test" class="hover:text-red-400">Test</a>
            </div>

            <!-- Button -->
            <a href="" class="hidden md:block p-3 px-6 pt-2 text-white bg-orange-600 rounded-full baseline border border-orange-600 transition-all duration-300 hover:bg-white hover:text-orange-600"><!--block : Takes up the full width of its parent container by default-->
                Get Started
            </a>

            {{-- Hambuger Icon --}}
            <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>
        </div>

        <!--Mobile Menu-->
        <div class="md:hidden">
            <div id="menu" class="absolute hidden flex flex-col items-center self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                <a href="#" class="hover:text-red-400">Pricing</a>
                <a href="#" class="hover:text-red-400">Product</a>
                <a href="#" class="hover:text-red-400">About Us</a>
                <a href="#" class="hover:text-red-400">Careers</a>
                <a href="#" class="hover:text-red-400">Community</a>
            </div>
        </div>
</nav>

{{-- flex → Makes the container a flexbox, so child items are laid in a row by default.

items-center → Vertically aligns items to the center of the container.

justify-between → Horizontally distributes items with space between them (first item to the far left, last to the far right).

justify-between distributes equal horizontal space between each child, with:

first item aligned to the left

last item aligned to the right

all others spaced evenly between--}}

{{-- container:
The container class is a utility that applies a max-width to the element depending on the current breakpoint (screen size).

It automatically centers the content horizontally and ensures the layout is responsive, making the element behave like a container with appropriate padding. --}}