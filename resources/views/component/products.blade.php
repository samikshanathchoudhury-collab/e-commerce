<section class="bg-white py-16">

    <!-- Button -->
    <div class="flex justify-center mb-12">
        <button class="bg-red-600 text-white px-12 py-4 rounded-full text-lg font-semibold">
            Shop Best Deals
        </button>
    </div>

    <!-- BANNERS -->
    <div class="grid grid-cols-12 gap-8 px-8">

        <!-- LEFT (BIG / MOTA) -->
        <div class="col-span-12 lg:col-span-8 relative h-[75vh] -3xl overflow-hidden">

            <img
                src="{{ asset('images/9.jpg') }}"
                class="absolute inset-0 w-full h-full object-cover"
            >

            <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-black/20 to-transparent"></div>

            <div class="relative z-10 h-full flex flex-col justify-center px-14 text-white">
                <p class="text-lg font-semibold mb-3">
                    It’s Accessories Time!
                </p>

                <h2 class="text-6xl font-bold mb-6 leading-tight">
                    Great Deals on <br>
                    Selected Jewellery
                </h2>

                <p class="max-w-lg text-lg mb-8 text-white/90">
                    Premium quality fashion jewellery at best prices.
                </p>

                <button class="bg-red-600 text-white px-10 py-4 rounded-full text-lg w-max">
                    Shop Now
                </button>

                <span class="absolute top-10 right-10 bg-red-600 text-white px-6 py-3 rounded-full text-sm font-semibold">
                    Limited Supply
                </span>
            </div>
        </div>

        <!-- RIGHT (CHOTA / PATLA) -->
        <div class="col-span-12 lg:col-span-4 relative h-[75vh] -3xl overflow-hidden">

            <img
                src="{{ asset('images/8.JPG') }}"
                class="absolute inset-0 w-full h-full object-cover"
            >

            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/10 to-transparent"></div>

            <div class="relative z-10 h-full flex flex-col justify-center px-10 text-white">
                <p class="text-lg font-semibold mb-3">
                    Deal of the Week
                </p>

                <h2 class="text-7xl font-bold mb-4">
                    40% <span class="text-3xl font-semibold">off</span>
                </h2>

                <p class="text-xl mb-8">
                    Jewellery Combos
                </p>

                <button class="bg-red-600 text-white px-10 py-4 rounded-full text-lg w-max">
                    Shop Now
                </button>
            </div>
        </div>

    </div>
</section>

<!-- ================= MOST POPULAR CATEGORIES ================= -->
<section class="bg-white py-16">

    <!-- CENTER HEADING -->
    <h2 class="text-3xl font-italic text-center mb-12">
        Most Popular Categories
    </h2>

    <!-- CATEGORIES ROW -->
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-4 border border-gray-300">

            <!-- CATEGORY 1 -->
            <div class="border-r border-gray-300">
                <div class="relative h-72 w-full overflow-hidden group">

                    <img src="{{ asset('images/11.jpg') }}"
                         class="w-full h-full object-cover transition duration-300 group-hover:scale-105">

                    <!-- HOVER SHADE -->
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition duration-300"></div>
                </div>

                <p class="text-center font-semibold py-4 bg-red-600 text-white">
                    Necklaces
                </p>
            </div>

            <!-- CATEGORY 2 -->
            <div class="border-r border-gray-300">
                <div class="relative h-72 w-full overflow-hidden group">

                    <img src="{{ asset('images/5.jpg') }}"
                         class="w-full h-full object-cover transition duration-300 group-hover:scale-105">

                    <!-- HOVER SHADE -->
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition duration-300"></div>
                </div>

                <p class="text-center font-semibold py-4 bg-red-600 text-white">
                    Earrings
                </p>
            </div>

            <!-- CATEGORY 3 -->
            <div class="border-r border-gray-300">
                <div class="relative h-72 w-full overflow-hidden group">

                    <img src="{{ asset('images/15.jpg') }}"
                         class="w-full h-full object-cover transition duration-300 group-hover:scale-105">

                    <!-- HOVER SHADE -->
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition duration-300"></div>
                </div>

                <p class="text-center font-semibold py-4 bg-red-600 text-white">
                    Bracelets
                </p>
            </div>

            <!-- CATEGORY 4 -->
            <div>
                <div class="relative h-72 w-full overflow-hidden group">

                    <img src="{{ asset('images/14.jpg') }}"
                         class="w-full h-full object-cover transition duration-300 group-hover:scale-105">

                    <!-- HOVER SHADE -->
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition duration-300"></div>
                </div>

                <p class="text-center font-semibold py-4 bg-red-600 text-white">
                    Rings
                </p>
            </div>

        </div>
    </div>

</section>