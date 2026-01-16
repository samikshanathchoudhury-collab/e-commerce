
<!-- TOP ANNOUNCEMENT CAROUSEL -->
<div class="bg-[#e9dfd3] text-[#4a3f35] text-large py-6 overflow-hidden">
    <div class="animate-marquee whitespace-nowrap text-center">
     Free Shipping on Orders Above ₹999 ✨ Easy Returns ✨ Premium Accessories 
    </div>
</div>

<!-- NAVBAR -->
<nav class="bg-[#f5efe9] border-b border-[#e2d6c8]">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between h-16">

            <!-- LEFT: LOGO + CATEGORIES -->
            <div class="flex items-center gap-6">

                <!-- LOGO -->
                <div class="text-4xl font-serif font-bold text-[#4a3f35]">
                    EA
                </div>

                <!-- CATEGORIES DROPDOWN -->
                <div class="relative group hidden md:block">
                    <button class="text-1xl font-medium text-[#4a3f35] flex items-center gap-1">
                        Categories
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- DROPDOWN -->
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
            <div class="hidden md:flex items-center gap-10 text-sm font-medium text-[#4a3f35]">
                <a href="#" class="hover:text-black">Home</a>
                <a href="#" class="hover:text-black">About</a>
                <a href="#" class="hover:text-black">Contact</a>
            </div>

            <!-- RIGHT: SEARCH + AUTH -->
            <div class="flex items-center gap-4">

                <!-- SEARCH -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open">
                        🔍
                    </button>

                    <input
                        x-show="open"
                        x-transition
                        type="text"
                        placeholder="Search accessories..."
                        class="absolute right-0 top-8 w-48 px-3 py-1 text-sm
                               border border-[#d8c7b5] rounded-md
                               focus:outline-none focus:ring-1 focus:ring-[#c2a27d]"
                    >
                </div>

                <!-- LOGIN -->
                <a href="#" class="text-sm text-[#4a3f35] hover:underline">
                    Login
                </a>

                <!-- SIGN UP -->
                <a href="#"
                   class="bg-[#c2a27d] text-white px-4 py-1.5 rounded-full
                          text-sm hover:bg-[#b08e68] transition">
                    Sign Up
                </a>

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

<!-- ALPINE (FOR SEARCH TOGGLE) -->
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>