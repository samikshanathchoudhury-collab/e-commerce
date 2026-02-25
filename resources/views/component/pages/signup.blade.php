
<body class="bg-[#fdeeee] text-gray-800">

@extends('layout.app')
@include('component.navbar')

<!-- TOP SECTION -->
<section class="min-h-screen flex items-center justify-center px-6">
     
    <div class="bg-white/70 backdrop-blur-lg rounded-3xl shadow-xl w-300xl max-w-7xl grid md:grid-cols-2 overflow-hidden">

        <!-- LEFT IMAGE -->
        <div class="hidden md:block">
           <img
                src="{{ asset('images/Eve Accessories.png') }}"
                 class="h-full w-[1200px] object-cover">
        </div>

        <!-- SIGN UP FORM -->
        <div class="p-10">
            <h1 class="heading text-3xl font-bold mb-2">
                Create Your Account
            </h1>
            <p class="text-sm text-gray-500 mb-8">
                Join Eve Accessories for elegant jewellery shopping
            </p>

            <form class="space-y-5">

                <input type="text" placeholder="Full Name"
                       class="w-full px-4 py-3 rounded-lg border border-gray-300
                              focus:outline-none focus:ring-2 focus:ring-[#687FE5]">

                <input type="email" placeholder="Email Address"
                       class="w-full px-4 py-3 rounded-lg border border-gray-300
                              focus:outline-none focus:ring-2 focus:ring-[#687FE5]">

                <input type="password" placeholder="Password"
                       class="w-full px-4 py-3 rounded-lg border border-gray-300
                              focus:outline-none focus:ring-2 focus:ring-[#687FE5]">

                <input type="password" placeholder="Confirm Password"
                       class="w-full px-4 py-3 rounded-lg border border-gray-300
                              focus:outline-none focus:ring-2 focus:ring-[#687FE5]">

                <button type="submit"
                        class="w-full bg-[#687FE5] hover:bg-[#0B2D72]
                               text-white py-3 rounded-lg font-medium transition">
                    Sign Up
                </button>
            </form>
        </div>
    </div>
</section>

<!-- SCROLL SECTION -->
<section class="px-6 py-20">
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">

        <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition">
            <h3 class="heading text-xl mb-3">Premium Designs</h3>
            <p class="text-sm text-gray-600">
                Carefully curated jewellery crafted for modern women.
            </p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition">
            <h3 class="heading text-xl mb-3">Secure Shopping</h3>
            <p class="text-sm text-gray-600">
                Safe signup process and smooth checkout experience.
            </p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition">
            <h3 class="heading text-xl mb-3">Elegant Experience</h3>
            <p class="text-sm text-gray-600">
                Minimal, aesthetic interface designed for comfort.
            </p>
        </div>

    </div>

</section>
@include('component.footer')

</body>
</html>
