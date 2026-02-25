<body class="bg-white">

@extends('layout.app')
@include('component.navbar')




<!-- ================= MYNTRA STYLE FULL BANNER ================= -->
<section class="w-full bg-white border-b">

    <div class="max-w-[1600px] mx-auto px-6 py-4">

        <div class="flex gap-3">

            <!-- LEFT SLIDER -->
            <div class="flex-1 overflow-hidden relative bg-white">

                <div id="myntraSlider" class="flex transition-transform duration-700">

                    <img src="{{ asset('images/Ivory bridal flats with lace details.png') }}"
                         class="w-full h-[550px] object-cover flex-shrink-0">

                    <img src="{{ asset('images/front.jpg') }}"
                         class="w-full h-[550px] object-cover flex-shrink-0">

                    <img src="{{ asset('images/shoe11.jpg') }}"
                         class="w-full h-[550px] object-cover flex-shrink-0">

                    <img src="{{ asset('images/chalo1.jpg') }}"
                         class="w-full h-[550px] object-cover flex-shrink-0">

                </div>

            </div>

            <!-- RIGHT TEXT PANEL -->
            <div class="w-[320px] bg-white flex flex-col justify-center px-8">
                <h2 class="text-5xl font-serif text-black">Bridal hills & Accessories</h2>
                <p class="text-3xl text-gray-600 mt-4">Min. 50% Off</p>
                <div class="mt-8 border-t pt-4 text-gray-500">
                    + Explore
                </div>
            </div>

        </div>

        <!-- DOTS -->
        <div class="flex justify-center mt-4 space-x-2">
            <span class="dot w-2 h-2 bg-gray-500 rounded-full"></span>
            <span class="dot w-2 h-2 bg-gray-300 rounded-full"></span>
            <span class="dot w-2 h-2 bg-gray-300 rounded-full"></span>
            <span class="dot w-2 h-2 bg-gray-300 rounded-full"></span>
        </div>

    </div>

</section>
<!-- ================= END MYNTRA BANNER ================= -->

<!-- GAP BEFORE FOOTER -->
<div class="mt-32"></div>

<section class="max-w-[1400px] mx-auto px-6 pb-20">

    <div class="flex gap-31">

        <!-- ================= LEFT FILTER SIDEBAR ================= -->
        <aside class="w-80 border-r pr-5">

            <h2 class="font-bold text-lg mb-6">CATEGORIES</h2>

            <ul class="space-y-4 text-sm text-gray-700">
                <li><a href="#" onclick="filterCategory('all')" class="hover:text-red-600">All</a></li>
                <li><a href="#" onclick="filterCategory('necklace')" class="hover:text-red-600">Necklaces</a></li>
                <li><a href="#" onclick="filterCategory('earring')" class="hover:text-red-600">Earrings</a></li>
                <li><a href="#" onclick="filterCategory('bracelet')" class="hover:text-red-600">Bracelets</a></li>
                <li><a href="#" onclick="filterCategory('watch')" class="hover:text-red-600">Rings</a></li>
            </ul>

        </aside>


        <!-- ================= PRODUCTS GRID ================= -->
        <div class="flex-1">

            <div id="productsGrid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-10">

                <!-- PRODUCT CARD -->
                <div class="product necklace bg-white cursor-pointer group" onclick="openProduct(1)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/36.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Gold Layered Necklace</p>
                        <p class="font-bold text-gray-900 mt-1">₹1,099</p>
                    </div>
                </div>

                 <div class="product necklace bg-white cursor-pointer group" onclick="openProduct(1)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/37.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Gold Layered Necklace</p>
                        <p class="font-bold text-gray-900 mt-1">₹1,099</p>
                    </div>
                </div>

                 <div class="product necklace bg-white cursor-pointer group" onclick="openProduct(1)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/38.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Gold Layered Necklace</p>
                        <p class="font-bold text-gray-900 mt-1">₹1,099</p>
                    </div>
                </div>

                 <div class="product necklace bg-white cursor-pointer group" onclick="openProduct(1)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/39.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Gold Layered Necklace</p>
                        <p class="font-bold text-gray-900 mt-1">₹1,099</p>
                    </div>
                </div>

                 <div class="product necklace bg-white cursor-pointer group" onclick="openProduct(1)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/40.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Gold Layered Necklace</p>
                        <p class="font-bold text-gray-900 mt-1">₹1,099</p>
                    </div>
                </div>

                
                <div class="product earring bg-white cursor-pointer group" onclick="openProduct(2)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/41.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Designer Earrings</p>
                        <p class="font-bold text-gray-900 mt-1">₹899</p>
                    </div>
                </div>

                <div class="product earring bg-white cursor-pointer group" onclick="openProduct(2)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/42.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Designer Earrings</p>
                        <p class="font-bold text-gray-900 mt-1">₹899</p>
                    </div>
                </div>

                <div class="product earring bg-white cursor-pointer group" onclick="openProduct(2)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/43.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Designer Earrings</p>
                        <p class="font-bold text-gray-900 mt-1">₹899</p>
                    </div>
                </div>

                <div class="product earring bg-white cursor-pointer group" onclick="openProduct(2)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/44.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Designer Earrings</p>
                        <p class="font-bold text-gray-900 mt-1">₹899</p>
                    </div>
                </div>

                <div class="product earring bg-white cursor-pointer group" onclick="openProduct(2)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/45.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Designer Earrings</p>
                        <p class="font-bold text-gray-900 mt-1">₹899</p>
                    </div>
                </div>

                <div class="product bracelet bg-white cursor-pointer group" onclick="openProduct(3)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/47.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Charm Bracelet</p>
                        <p class="font-bold text-gray-900 mt-1">₹1,299</p>
                    </div>
                </div>

           

                <div class="product bracelet bg-white cursor-pointer group" onclick="openProduct(3)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/48.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Charm Bracelet</p>
                        <p class="font-bold text-gray-900 mt-1">₹1,299</p>
                    </div>
                </div>
                     <div class="product bracelet bg-white cursor-pointer group" onclick="openProduct(3)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/46.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Charm Bracelet</p>
                        <p class="font-bold text-gray-900 mt-1">₹1,299</p>
                    </div>
                </div>

                <div class="product bracelet bg-white cursor-pointer group" onclick="openProduct(3)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/49.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Charm Bracelet</p>
                        <p class="font-bold text-gray-900 mt-1">₹1,299</p>
                    </div>
                </div>

                <div class="product bracelet bg-white cursor-pointer group" onclick="openProduct(3)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/50.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Charm Bracelet</p>
                        <p class="font-bold text-gray-900 mt-1">₹1,299</p>
                    </div>
                </div>

                  <div class="product watch bg-white cursor-pointer group" onclick="openProduct(5)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/31.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Rings</p>
                        <p class="font-bold text-gray-900 mt-1">₹2,999</p>
                    </div>
                </div>

                  <div class="product watch bg-white cursor-pointer group" onclick="openProduct(5)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/32.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Rings</p>
                        <p class="font-bold text-gray-900 mt-1">₹2,999</p>
                    </div>
                </div>

                  <div class="product watch bg-white cursor-pointer group" onclick="openProduct(5)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/33.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Rings</p>
                        <p class="font-bold text-gray-900 mt-1">₹2,999</p>
                    </div>
                </div>

                  <div class="product watch bg-white cursor-pointer group" onclick="openProduct(5)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/34.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Rings</p>
                        <p class="font-bold text-gray-900 mt-1">₹2,999</p>
                    </div>
                </div>

                  <div class="product watch bg-white cursor-pointer group" onclick="openProduct(5)">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/35.jpg') }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="mt-3">
                        <h3 class="font-semibold text-gray-800">Eve Accessories</h3>
                        <p class="text-sm text-gray-600">Rings</p>
                        <p class="font-bold text-gray-900 mt-1">₹2,999</p>
                    </div>
                </div>

               
               
                


            </div>

        </div>

    </div>

</section>


<!-- ================= JAVASCRIPT ================= -->
<script>

function filterCategory(category) {
    let products = document.querySelectorAll('.product');

    products.forEach(product => {
        if(category === 'all') {
            product.style.display = "block";
        } else {
            if(product.classList.contains(category)) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        }
    });
}

function openProduct(id) {
    window.location.href = "/product/" + id;
}


/* ================= MYNTRA SLIDER ================= */
let slideIndex = 0;
const slider = document.getElementById("myntraSlider");
const dots = document.querySelectorAll(".dot");

setInterval(() => {

    slideIndex++;
    if(slideIndex > 3) slideIndex = 0;

    slider.style.transform =
        `translateX(-${slideIndex * 100}%)`;

    dots.forEach(d => d.classList.remove("bg-gray-500"));
    dots.forEach(d => d.classList.add("bg-gray-300"));
    dots[slideIndex].classList.remove("bg-gray-300");
    dots[slideIndex].classList.add("bg-gray-500");

}, 3000);

</script>



<!-- GAP BEFORE FOOTER -->
<div class="mt-32"></div>

@include('component.footer')

</body>
</html>