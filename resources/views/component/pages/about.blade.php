@extends('layout.app')
@include('component.navbar')

<body class="bg-[#f5efe9] text-gray-800 overflow-x-hidden">

<!-- HERO SECTION WITH BACKGROUND IMAGE -->
<section class="relative min-h-screen flex items-center justify-center px-6">
    
    <!-- Background Image -->
    <div class="absolute inset-0">
      <img
                src="{{ asset('images/Ivory bridal flats with lace details.png') }}"
                class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#f5efe9]/50"></div>
    </div>

    <!-- Content -->
    <div class="relative max-w-5xl text-center reveal">
        <h1 class="text-4xl md:text-6xl font-serif text-red-600 mb-6">
            About Eve Accessories
        </h1>
        <p class="text-lg md:text-xl text-gray-600 leading-relaxed">
            Where elegance meets everyday beauty.  
            Designed for women who love subtle luxury, timeless fashion,  
            and accessories that speak softly yet shine boldly.
        </p>
    </div>
</section>

<!-- WHO WE ARE -->
<section class="py-24 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-14 items-center">
        
        <div class="reveal">
            <h2 class="text-3xl font-serif text-[#6b4f3f] mb-4">Who We Are</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Eve Accessories is a women-focused e-commerce platform dedicated to
                providing beautifully crafted accessories that enhance everyday style.
            </p>
            <p class="text-gray-600 leading-relaxed">
                We believe accessories are not just fashion items — they are expressions
                of confidence, personality, and elegance.
            </p>
        </div>

        <div class="rounded-3xl overflow-hidden shadow-xl reveal">
            <img src="{{ asset('images/front2.JPG') }}"
                 class="w-full h-full object-cover">
        </div>
    </div>
</section>

<!-- OUR VISION -->
<section class="py-24 px-6 bg-white">
    <div class="max-w-4xl mx-auto text-center reveal">
        <h2 class="text-3xl font-serif text-[#6b4f3f] mb-6">Our Vision</h2>
        <p class="text-gray-600 leading-relaxed">
            Our vision is to create a digital shopping experience where women can easily
            explore premium-looking accessories without complexity.
        </p>
    </div>
</section>

<!-- WHAT MAKES US SPECIAL -->
<section class="py-24 px-6">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-serif text-[#6b4f3f] mb-14 text-center reveal">
            What Makes Us Special
        </h2>

        <div class="grid md:grid-cols-3 gap-10">
            <div class="bg-white p-8 rounded-3xl shadow-md reveal">
                <h3 class="text-xl font-semibold mb-3">Elegant Designs</h3>
                <p class="text-gray-600">
                    Accessories selected with timeless beauty and modern trends.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-md reveal">
                <h3 class="text-xl font-semibold mb-3">User-Friendly Shopping</h3>
                <p class="text-gray-600">
                    Smooth experience across web and mobile devices.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-md reveal">
                <h3 class="text-xl font-semibold mb-3">Quality Assurance</h3>
                <p class="text-gray-600">
                    Carefully chosen materials ensuring durability.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- PROJECT PURPOSE -->
<section class="py-24 px-6 bg-[#efe5da]">
    <div class="max-w-5xl mx-auto text-center reveal">
        <h2 class="text-3xl font-serif text-[#6b4f3f] mb-6">
            Project Purpose
        </h2>
        <p class="text-gray-700 leading-relaxed">
            Eve Accessories is developed as an academic e-commerce project
            focusing only on browsing and buying experiences.
        </p>
    </div>
</section>

<!-- OUR PROMISE -->
<section class="py-24 px-6 bg-white">
    <div class="max-w-4xl mx-auto text-center reveal">
        <h2 class="text-3xl font-serif text-[#6b4f3f] mb-6">Our Promise</h2>
        <p class="text-gray-600 leading-relaxed">
            Eve Accessories is more than a store — it’s a style companion.
        </p>
    </div>
</section>

<!-- FOOTER CTA -->
<section class="py-24 px-6 text-center bg-[#6b4f3f] text-white reveal">
    <h2 class="text-3xl font-serif mb-4">Discover Your Style with Eve</h2>
    <p class="mb-6 text-lg">
        Explore accessories crafted to elevate your everyday look.
    </p>
    <a href ="{{ url('/shopnow') }}"> <button class="inline-block px-10 py-3 bg-white text-[#6b4f3f] rounded-full font-semibold hover:bg-gray-100 transition">
        Explore Collection
</button>
    </a>
</section>

<!-- ANIMATION SCRIPT -->
<script>
    const reveals = document.querySelectorAll('.reveal');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add(
                    'opacity-100',
                    'translate-y-0'
                );
            }
        });
    }, { threshold: 0.15 });

    reveals.forEach(el => {
        el.classList.add(
            'opacity-0',
            'translate-y-16',
            'transition-all',
            'duration-1000',
            'ease-out'
        );
        observer.observe(el);
    });
</script>

</body>
