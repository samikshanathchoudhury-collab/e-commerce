<!-- SHOP BY CATEGORY SECTION -->
<section class="bg-[#f8f4ef] py-20">

  <!-- TOP AESTHETIC IMAGE -->
  <div class="max-w-6xl mx-auto mb-16">
    <img 
      src="{{ asset('images/8.JPG') }}"
      class="w-full h-[420px] object-cover rounded-xl"
      alt="Aesthetic Jewelry"
    >
  </div>

  <!-- HEADING -->
  <div class="text-center mb-10">
    <h2 class="text-4xl font-serif text-gray-900">
      Shop by Category
    </h2>
  </div>

  <!-- SLIDER -->
  <div class="relative max-w-6xl mx-auto overflow-hidden">

    <!-- SLIDE TRACK -->
    <div 
      id="productSlider" 
      class="flex gap-6 transition-transform duration-700"
    >
      <img src="images/2.jpg" class="w-72 h-96 object-cover rounded-lg flex-shrink-0">
      <img src="images/3.jpg" class="w-72 h-96 object-cover rounded-lg flex-shrink-0">
      <img src="images/4.jpg" class="w-72 h-96 object-cover rounded-lg flex-shrink-0">
      <img src="images/5.jpg" class="w-72 h-96 object-cover rounded-lg flex-shrink-0">
      <img src="images/6.jpg" class="w-72 h-96 object-cover rounded-lg flex-shrink-0">
    </div>

  </div>
</section>

<!-- SLIDER JS -->
<script>
  const slider = document.getElementById('productSlider');
  let index = 0;
  const slideWidth = 288; // image width + gap

  setInterval(() => {
    index++;
    if (index > 2) {
      index = 0;
    }
    slider.style.transform = `translateX(-${index * slideWidth}px)`;
  }, 2500);
</script>
