<footer class="bg-black">
    {{-- Flex container --}}
    <div class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
        {{-- Logo and social media links container --}}
        <div class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
            <div class="mx-auto my-6 text-center text-white md:hidden">
                Copyright &copy;2025, All Rights Reserved.
            </div>
            {{-- Logo --}}
            <div>
                <img src="/img/logo-white.svg" alt="" class="h-8">
            </div>

            {{-- Social media links --}}
            <div class="flex justify-center space-x-4">
                {{-- Link 1 --}}
                <a href="#">
                    <img src="/img/icon-facebook.svg" alt="" class="h-6">
                </a>
                {{-- Link 2 --}}
                <a href="#">
                    <img src="/img/icon-youtube.svg" alt="" class="h-6">
                </a>
                {{-- Link 3 --}}
                <a href="#">
                    <img src="/img/icon-twitter.svg" alt="" class="h-6">
                </a>
                {{-- Link 4 --}}
                <a href="#">
                    <img src="/img/icon-pinterest.svg" alt="" class="h-6">
                </a>
                {{-- Link 5 --}}
                <a href="#">
                    <img src="/img/icon-instagram.svg" alt="" class="h-6">
                </a>
            </div>
        </div>

        {{-- List Container --}}
        <div class="flex justify-around space-x-32">
            {{-- List 1 --}}
            <div class="flex flex-col space-y-3 text-white">
                <a href="#" class="hover:text-orange-500">Home</a>
                <a href="#" class="hover:text-orange-500">Pricing</a>
                <a href="#" class="hover:text-orange-500">Products</a>
                <a href="#" class="hover:text-orange-500">About Us</a>
            </div>

            {{-- List 2 --}}
            <div class="flex flex-col space-y-3 text-white">
                <a href="#" class="hover:text-orange-500">Careers</a>
                <a href="#" class="hover:text-orange-500">Community</a>
                <a href="#" class="hover:text-orange-500">Privacy Policy</a>
            </div>
        </div>

        {{-- Input Container --}}
        <div class="flex flex-col justify-between">
            <form>
                <div class="flex space-x-3">
                    <input type="text" class="flex-1 px-4 rounded-full bg-gray-300" placeholder="Updated in your inbox"/>
                    <button class="px-6 py-2 text-white rounded-full bg-orange-600 hover:bg-orange-500 focus:outline-none cursor-pointer">Go</button>
                </div>
            </form>

            <div class="hidden text-white md:block">
                Copyright &copy;2025, All Rights Reserved.
            </div>
        </div>
    </div>
</footer>