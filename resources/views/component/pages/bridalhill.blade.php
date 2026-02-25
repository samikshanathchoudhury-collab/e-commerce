

@extends('layout.app')
@include('component.navbar')

<body class="bg-white">

<section class="py-20">

<div class="max-w-7xl mx-auto px-6">

<!-- HEADING -->
<div class="text-center mb-16">
    <h2 class="text-5xl font-serif text-[#5c4b3b]">
        Bridal Heels Collection
    </h2>
    <p class="mt-4 text-lg text-[#8c7764]">
        Crafted for your magical walk down the aisle ✨
    </p>
</div>

<!-- PRODUCT GRID -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

<!-- REPEATABLE PRODUCT CARD -->
<script>
function toggleHeart(button) {
    const icon = button.querySelector("svg");
    icon.classList.toggle("text-red-500");
    icon.classList.toggle("text-gray-400");
}
</script>

<!-- 12 PRODUCTS -->
<!-- Product 1 -->
<div class="group relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
<button onclick="toggleHeart(this)" class="absolute top-4 right-4 z-20 bg-white p-2 rounded-full shadow-md hover:bg-pink-50">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
</svg>
</button>
<a href="#"><img src="images/ChatGPT Image Feb 19, 2026, 02_06_32 PM.png" class="w-full h-80 object-cover group-hover:scale-110 transition duration-700"></a>
<div class="p-6 text-center">
<h3 class="text-xl font-semibold text-[#5c4b3b]">Pearl Satin Heels</h3>
<p class="text-[#a08c7a] mt-2">Elegant bridal glow</p>
<p class="text-lg font-bold text-[#b08968] mt-3">₹4,999</p>
<button class="mt-4 bg-[#b08968] text-white px-5 py-2 rounded-full hover:bg-[#9c6f4f] transition">Add to Bag</button>
</div>
</div>

<!-- Product 2 -->
<div class="group relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
<button onclick="toggleHeart(this)" class="absolute top-4 right-4 z-20 bg-white p-2 rounded-full shadow-md hover:bg-pink-50">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
</svg>
</button>
<a href="#"><img src="images/ChatGPT Image Feb 19, 2026, 02_07_23 PM.png" class="w-full h-80 object-cover group-hover:scale-110 transition duration-700"></a>
<div class="p-6 text-center">
<h3 class="text-xl font-semibold text-[#5c4b3b]">Pearl Satin Heels</h3>
<p class="text-[#a08c7a] mt-2">Elegant bridal glow</p>
<p class="text-lg font-bold text-[#b08968] mt-3">₹4,999</p>
<button class="mt-4 bg-[#b08968] text-white px-5 py-2 rounded-full hover:bg-[#9c6f4f] transition">Add to Bag</button>
</div>
</div>

<!-- Product 3 -->
<div class="group relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
<button onclick="toggleHeart(this)" class="absolute top-4 right-4 z-20 bg-white p-2 rounded-full shadow-md hover:bg-pink-50">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
</svg>
</button>
<a href="#"><img src="images/ChatGPT Image Feb 19, 2026, 02_08_26 PM.png" class="w-full h-80 object-cover group-hover:scale-110 transition duration-700"></a>
<div class="p-6 text-center">
<h3 class="text-xl font-semibold text-[#5c4b3b]">Pearl Satin Heels</h3>
<p class="text-[#a08c7a] mt-2">Elegant bridal glow</p>
<p class="text-lg font-bold text-[#b08968] mt-3">₹4,999</p>
<button class="mt-4 bg-[#b08968] text-white px-5 py-2 rounded-full hover:bg-[#9c6f4f] transition">Add to Bag</button>
</div>
</div>


<!-- Product 4 -->
<div class="group relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
<button onclick="toggleHeart(this)" class="absolute top-4 right-4 z-20 bg-white p-2 rounded-full shadow-md hover:bg-pink-50">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
</svg>
</button>
<a href="#"><img src="images/ChatGPT Image Feb 19, 2026, 02_10_12 PM.png" class="w-full h-80 object-cover group-hover:scale-110 transition duration-700"></a>
<div class="p-6 text-center">
<h3 class="text-xl font-semibold text-[#5c4b3b]">Pearl Satin Heels</h3>
<p class="text-[#a08c7a] mt-2">Elegant bridal glow</p>
<p class="text-lg font-bold text-[#b08968] mt-3">₹4,999</p>
<button class="mt-4 bg-[#b08968] text-white px-5 py-2 rounded-full hover:bg-[#9c6f4f] transition">Add to Bag</button>
</div>
</div>

<!-- Product 5-->
<div class="group relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
<button onclick="toggleHeart(this)" class="absolute top-4 right-4 z-20 bg-white p-2 rounded-full shadow-md hover:bg-pink-50">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
</svg>
</button>
<a href="#"><img src="images/ChatGPT Image Feb 19, 2026, 02_11_30 PM.png" class="w-full h-80 object-cover group-hover:scale-110 transition duration-700"></a>
<div class="p-6 text-center">
<h3 class="text-xl font-semibold text-[#5c4b3b]">Pearl Satin Heels</h3>
<p class="text-[#a08c7a] mt-2">Elegant bridal glow</p>
<p class="text-lg font-bold text-[#b08968] mt-3">₹4,999</p>
<button class="mt-4 bg-[#b08968] text-white px-5 py-2 rounded-full hover:bg-[#9c6f4f] transition">Add to Bag</button>
</div>
</div>

<!-- Product 6 -->
<div class="group relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
<button onclick="toggleHeart(this)" class="absolute top-4 right-4 z-20 bg-white p-2 rounded-full shadow-md hover:bg-pink-50">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
</svg>
</button>
<a href="#"><img src="images/ChatGPT Image Feb 19, 2026, 01_57_13 PM.png" class="w-full h-80 object-cover group-hover:scale-110 transition duration-700"></a>
<div class="p-6 text-center">
<h3 class="text-xl font-semibold text-[#5c4b3b]">Pearl Satin Heels</h3>
<p class="text-[#a08c7a] mt-2">Elegant bridal glow</p>
<p class="text-lg font-bold text-[#b08968] mt-3">₹4,999</p>
<button class="mt-4 bg-[#b08968] text-white px-5 py-2 rounded-full hover:bg-[#9c6f4f] transition">Add to Bag</button>
</div>
</div>

<!-- Product 7 -->
<div class="group relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
<button onclick="toggleHeart(this)" class="absolute top-4 right-4 z-20 bg-white p-2 rounded-full shadow-md hover:bg-pink-50">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
</svg>
</button>
<a href="#"><img src="https://source.unsplash.com/500x600/?bridal,heels" class="w-full h-80 object-cover group-hover:scale-110 transition duration-700"></a>
<div class="p-6 text-center">
<h3 class="text-xl font-semibold text-[#5c4b3b]">Pearl Satin Heels</h3>
<p class="text-[#a08c7a] mt-2">Elegant bridal glow</p>
<p class="text-lg font-bold text-[#b08968] mt-3">₹4,999</p>
<button class="mt-4 bg-[#b08968] text-white px-5 py-2 rounded-full hover:bg-[#9c6f4f] transition">Add to Bag</button>
</div>
</div>

<!-- Product 8-->
<div class="group relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
<button onclick="toggleHeart(this)" class="absolute top-4 right-4 z-20 bg-white p-2 rounded-full shadow-md hover:bg-pink-50">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
</svg>
</button>
<a href="#"><img src="https://source.unsplash.com/500x600/?bridal,heels" class="w-full h-80 object-cover group-hover:scale-110 transition duration-700"></a>
<div class="p-6 text-center">
<h3 class="text-xl font-semibold text-[#5c4b3b]">Pearl Satin Heels</h3>
<p class="text-[#a08c7a] mt-2">Elegant bridal glow</p>
<p class="text-lg font-bold text-[#b08968] mt-3">₹4,999</p>
<button class="mt-4 bg-[#b08968] text-white px-5 py-2 rounded-full hover:bg-[#9c6f4f] transition">Add to Bag</button>
</div>
</div>

<!-- Product 9 -->
<div class="group relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
<button onclick="toggleHeart(this)" class="absolute top-4 right-4 z-20 bg-white p-2 rounded-full shadow-md hover:bg-pink-50">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
</svg>
</button>
<a href="#"><img src="https://source.unsplash.com/500x600/?bridal,heels" class="w-full h-80 object-cover group-hover:scale-110 transition duration-700"></a>
<div class="p-6 text-center">
<h3 class="text-xl font-semibold text-[#5c4b3b]">Pearl Satin Heels</h3>
<p class="text-[#a08c7a] mt-2">Elegant bridal glow</p>
<p class="text-lg font-bold text-[#b08968] mt-3">₹4,999</p>
<button class="mt-4 bg-[#b08968] text-white px-5 py-2 rounded-full hover:bg-[#9c6f4f] transition">Add to Bag</button>
</div>
</div>

<!-- Product 10 -->
<div class="group relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
<button onclick="toggleHeart(this)" class="absolute top-4 right-4 z-20 bg-white p-2 rounded-full shadow-md hover:bg-pink-50">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
</svg>
</button>
<a href="#"><img src="https://source.unsplash.com/500x600/?bridal,heels" class="w-full h-80 object-cover group-hover:scale-110 transition duration-700"></a>
<div class="p-6 text-center">
<h3 class="text-xl font-semibold text-[#5c4b3b]">Pearl Satin Heels</h3>
<p class="text-[#a08c7a] mt-2">Elegant bridal glow</p>
<p class="text-lg font-bold text-[#b08968] mt-3">₹4,999</p>
<button class="mt-4 bg-[#b08968] text-white px-5 py-2 rounded-full hover:bg-[#9c6f4f] transition">Add to Bag</button>
</div>
</div>

<!-- Product 11 -->
<div class="group relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
<button onclick="toggleHeart(this)" class="absolute top-4 right-4 z-20 bg-white p-2 rounded-full shadow-md hover:bg-pink-50">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
</svg>
</button>
<a href="#"><img src="https://source.unsplash.com/500x600/?bridal,heels" class="w-full h-80 object-cover group-hover:scale-110 transition duration-700"></a>
<div class="p-6 text-center">
<h3 class="text-xl font-semibold text-[#5c4b3b]">Pearl Satin Heels</h3>
<p class="text-[#a08c7a] mt-2">Elegant bridal glow</p>
<p class="text-lg font-bold text-[#b08968] mt-3">₹4,999</p>
<button class="mt-4 bg-[#b08968] text-white px-5 py-2 rounded-full hover:bg-[#9c6f4f] transition">Add to Bag</button>
</div>
</div>

<!-- Product 12 -->
<div class="group relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition">
<button onclick="toggleHeart(this)" class="absolute top-4 right-4 z-20 bg-white p-2 rounded-full shadow-md hover:bg-pink-50">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
</svg>
</button>
<a href="#"><img src="https://source.unsplash.com/500x600/?bridal,heels" class="w-full h-80 object-cover group-hover:scale-110 transition duration-700"></a>
<div class="p-6 text-center">
<h3 class="text-xl font-semibold text-[#5c4b3b]">Pearl Satin Heels</h3>
<p class="text-[#a08c7a] mt-2">Elegant bridal glow</p>
<p class="text-lg font-bold text-[#b08968] mt-3">₹4,999</p>
<button class="mt-4 bg-[#b08968] text-white px-5 py-2 rounded-full hover:bg-[#9c6f4f] transition">Add to Bag</button>
</div>
</div>

</div>

</div>
</section>

</body>
</html>



<!-- GAP BEFORE FOOTER -->
<div class="mt-32"></div>

@include('component.footer')

</body>
</html>
