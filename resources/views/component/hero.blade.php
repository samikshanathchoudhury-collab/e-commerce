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
  <img src="images/1.jpg" class="slide absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000">
  <img src="images/2.jpg" class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
  <img src="images/3.jpg" class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
  <img src="images/4.jpg" class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">

  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-black/40"></div>

  <!-- TEXT CONTENT -->
  <div class="absolute inset-0 flex items-center justify-center text-center px-6">
    <div class="text-white max-w-2xl">
      <h1 class="text-5xl md:text-6xl font-serif">
        Explore the Collection
      </h1>

      <h2 class="text-4xl md:text-5xl font-serif text-pink-200 mt-2">
        Where minimal meets magic
      </h2>

      <p class="italic text-pink-100 mt-4">
        pretty finds, pretty prices ✨
      </p>

      <p class="mt-6 text-gray-200">
        Earrings • Bracelets • Rings • Anklets • Pendants
      </p>

      <button class="mt-12 bg-white text-black px-10 py-3 tracking-wide hover:bg-gray-200 transition viewbox=0 0 20 20">
        Shop Now
      </button>
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
