<!-- TOP ANNOUNCEMENT CAROUSEL -->
<div class="bg-[#F5AFAF] text-white text-large py-6 overflow-hidden">
    <div class="animate-marquee whitespace-nowrap text-center">
     Free Shipping on Orders Above ₹999 . Easy Returns . Premium Accessories 
    </div>
</div>

<!-- NAVBAR --> 
<nav class="bg-white border-b border-[#e2d6c8]">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between h-16">

            <!-- LEFT: LOGO + CATEGORIES -->
            <div class="flex items-center gap-6">

                <div class="text-4xl font-serif font-bold text-[#4a3f35]">
                    EV
                </div>

                <div class="relative group hidden md:block">
                    <button class="text-xl font-medium text-[#4a3f35] flex items-center gap-1">
                        Categories
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div
                        class="absolute left-0 mt-3 w-56 bg-white shadow-xl rounded-lg
                               opacity-0 invisible group-hover:opacity-100 group-hover:visible
                               transition-all duration-300 z-50">

                        <ul class="text-sm text-[#4a3f35]">
                            <li class="px-4 py-2 hover:bg-[#f5efe9]">Bracelets</li>
                            <li class="px-4 py-2 hover:bg-[#f5efe9]">Earrings</li>
                            <li class="px-4 py-2 hover:bg-[#f5efe9]">Nose Rings</li>
                            <li class="px-4 py-2 hover:bg-[#f5efe9]">Finger Rings</li>
                            <li class="px-4 py-2 hover:bg-[#f5efe9]">Necklaces & Pendants</li>
                            <li class="px-4 py-2 hover:bg-[#f5efe9]">Hair Accessories</li>
                            <li class="px-4 py-2 hover:bg-[#f5efe9]">Anklets</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CENTER MENU -->
            <div class="hidden md:flex items-center gap-10 text-xl font-medium text-[#4a3f35]">
                <a href="{{ url('/') }}" class="hover:text-black">Home</a>
                <a href ="{{ url('/shopnow') }}" class="hover:text-black">Shop</a>
                <a href="{{ url('/about') }}" class="hover:text-black">About</a>
                <a href="{{ url('/contact') }}" class="hover:text-black">Contact</a>
            </div>

            <!-- RIGHT: AUTH -->
            <div class="flex items-center gap-5">

                <!-- LOGIN -->
                <a href="{{ url('/login') }}" class="text-xl text-[#4a3f35] hover:text-black">
                    Login
                </a>

                <!-- SIGN UP -->
                <a href="{{ url('/signup') }}"
                   class="bg-[#687FE5] text-white px-4 py-1.5 rounded-full
                          text-xl hover:bg-[#0B2D72] transition">
                    Register
                </a>

                <!-- WISHLIST -->
                <div class="flex flex-col items-center cursor-pointer text-[#4a3f35] hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
                    </svg>
                    <span class="text-xs">Wishlist</span>
                </div>

                <!-- BAG -->
                <div class="flex flex-col items-center cursor-pointer text-[#4a3f35] hover:text-black">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-6 h-6"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2"
                              d="M5 8h14l-1 12H6L5 8zm3 0a4 4 0 118 0"/>
                    </svg>

                    <span class="text-xs">Bag</span>
                </div>

                <!-- MOBILE MENU -->
                <button class="md:hidden text-xl">
                    ☰
                </button>

            </div>
        </div>
    </div>
</nav>

<!-- MARQUEE ANIMATION -->
<style>
@keyframes marquee {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}
.animate-marquee {
    display: inline-block;
    animation: marquee 15s linear infinite;
}
</style>

<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
