<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Girls Accessories</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-hidden">

<!-- FULL SCREEN SLIDER -->
<section class="relative w-screen h-screen">

  <!-- Slides -->
  <img src="images/ChatGPT Image Feb 9, 2026, 02_49_39 PM.png" class="slide absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000">
  <img src="images/Elegant bridal shoes on tulle (1).png" class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
  <img src="images/Ivory bridal flats with lace details.png" class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">

  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-black/40"></div>

  <!-- TEXT CONTENT -->
  <div class="absolute inset-0 flex items-center justify-center text-center px-6">
    <div class="text-white max-w-2xl">
      <h1 class="text-5xl md:text-6xl font-serif">
        Eve Accessories
      </h1>

      <h2 class="text-4xl md:text-5xl font-serif text-white mt-2">
        Where minimal meets magic
      </h2>

      <p class="italic text-pink-100 mt-4">
        pretty finds, pretty prices ✨
      </p>

      <p class="mt-6 text-gray-200">
        Earrings • Bracelets • Rings • Anklets • Pendants
      </p>

      <a href ="{{ url('/bridalhill') }}"><button class="mt-12 bg-red-600 text-white px-10 py-3 tracking-wide hover:bg-gray-200 transition viewbox=0 0 20 20">
        View our products
      </button></a>  
      </div>
  </div>

</section>

<!-- JS SLIDER -->
<script>
  const slides = document.querySelectorAll('.slide');
  let index = 0;

  setInterval(() => {
    slides[index].classList.remove('opacity-100');
    slides[index].classList.add('opacity-0');

    index = (index + 1) % slides.length;

    slides[index].classList.remove('opacity-0');
    slides[index].classList.add('opacity-100');
  }, 2000);
</script>

</body>
</html>
