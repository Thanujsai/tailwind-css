<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<title>Tailwind</title>

<body>
    <nav class="relative container mx-auto p-6"><!--to add margins in the left and right-->
        <!--Flex container -->
        <div class="flex items-center justify-between"><!--to put the items in the div in a row and center them-->
            <!--Logo -->
            <div class="pt-2">
                <img src="/img/logo.svg" alt="">
            </div>

            <!--Menu items-->
            <div class="hidden md:flex space-x-6"><!--hidden	Hides the element by default (on all screen sizes), md:flex	From medium screens (≥768px) and up, apply display: flex. This overrides hidden. -->
                <a href="#" class="hover:text-red-400">Pricing</a>
                <a href="#" class="hover:text-red-400">Product</a>
                <a href="#" class="hover:text-red-400">About Us</a>
                <a href="#" class="hover:text-red-400">Careers</a>
                <a href="#" class="hover:text-red-400">Community</a>
            </div>

            <!-- Button -->
            <a href="" class="hidden md:block p-3 px-6 pt-2 text-white bg-orange-600 hover:bg-orange-500 rounded-full baseline"><!--block : Takes up the full width of its parent container by default-->
                Get Started
            </a>
        </div>
    </nav>
</body>

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