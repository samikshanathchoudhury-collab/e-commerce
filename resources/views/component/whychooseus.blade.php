<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Featured Bridal Shoes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

<section class="py-20">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Heading -->
    <h2 class="text-3xl font-serif text-center text-gray-900">
      Featured Bridal Shoes
    </h2>

   <!-- Decorative underline -->
<div class="flex justify-center mt-1 -mb-2">
  <img
    src="{{ asset('images/Graceful curved vine with leaves.png') }}"
    alt="Underline Decorative"
    class="w-68"
  />
</div>



    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-14">

      <!-- Card -->
      <div class="group bg-white rounded-2xl border shadow-sm overflow-hidden transition">
        <div class="overflow-hidden">
          <img
            src="images/ChatGPT Image Feb 9, 2026, 03_22_49 PM.png"
            class="w-full h-64 object-cover transition duration-500 group-hover:-translate-y-2 group-hover:scale-105"
          />
        </div>

        <div class="p-6 text-center">
          <h3 class="font-serif text-lg">Valentino</h3>
          <p class="text-sm text-gray-500 mt-2">
            Elegant handcrafted bridal heel with a classic silhouette.
          </p>

          <div class="flex items-center justify-between mt-6">
            <span class="font-medium">₹765</span>
            <button class="bg-gray-900 text-white text-xs px-4 py-2 rounded-full">
              BUY NOW
            </button>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="group bg-white rounded-2xl border shadow-sm overflow-hidden transition">
        <div class="overflow-hidden">
          <img
            src="images/Ivory bridal heels with lace and pearls.png"
            class="w-full h-64 object-cover transition duration-500 group-hover:-translate-y-2 group-hover:scale-105"
          />
        </div>

        <div class="p-6 text-center">
          <h3 class="font-serif text-lg">Vivienne</h3>
          <p class="text-sm text-gray-500 mt-2">
            Chic and modern, perfect for the contemporary bride.
          </p>

          <div class="flex items-center justify-between mt-6">
            <span class="font-medium">₹899</span>
            <button class="bg-gray-900 text-white text-xs px-4 py-2 rounded-full">
              BUY NOW
            </button>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="group bg-white rounded-2xl border shadow-sm overflow-hidden transition">
        <div class="overflow-hidden">
          <img
            src="images/Ivory satin bridal shoes with block heels.png"
            class="w-full h-64 object-cover transition duration-500 group-hover:-translate-y-2 group-hover:scale-105"
          />
        </div>

        <div class="p-6 text-center">
          <h3 class="font-serif text-lg">Christina</h3>
          <p class="text-sm text-gray-500 mt-2">
            Comfort meets style in this beautiful bridal shoe.
          </p>

          <div class="flex items-center justify-between mt-6">
            <span class="font-medium">₹495</span>
            <button class="bg-gray-900 text-white text-xs px-4 py-2 rounded-full">
              BUY NOW
            </button>
          </div>
        </div>
      </div>

      <!-- Card -->
      <div class="group bg-white rounded-2xl border shadow-sm overflow-hidden transition">
        <div class="overflow-hidden">
          <img
            src="images/Elegance in bridal footwear.png"
            class="w-full h-64 object-cover transition duration-500 group-hover:-translate-y-2 group-hover:scale-105"
          />
        </div>

        <div class="p-6 text-center">
          <h3 class="font-serif text-lg">Carolina</h3>
          <p class="text-sm text-gray-500 mt-2">
            A timeless piece for your special day.
          </p>

          <div class="flex items-center justify-between mt-6">
            <span class="font-medium">₹255</span>
            <button class="bg-gray-900 text-white text-xs px-4 py-2 rounded-full">
              BUY NOW
            </button>
          </div>
        </div>
      </div>

    </div>

    <!-- View All -->
    <div class="flex justify-center mt-14">
      <a href ="{{ url('/bridalhill') }}"><button class="border px-8 py-3 rounded-full text-sm hover:bg-gray-900 hover:text-white transition">
        View All Collections
      </button></a >
    </div>

  </div>
</section>

</body>
</html>
