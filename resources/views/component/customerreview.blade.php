<section class="bg-white py-20">

    <!-- Heading -->
    <div class="text-center mb-16">
        <span class="uppercase tracking-widest text-sm text-purple-500">
            Customer Reviews
        </span>
        <h2 class="text-4xl font-serif text-gray-800 mt-4">
            Loved by Thousands of Women
        </h2>
        <p class="text-gray-500 mt-3 max-w-xl mx-auto">
            Honest reviews from customers who style our accessories every day.
        </p>
    </div>

    <!-- Reviews -->
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-10">

        @foreach ([
            ['name'=>'Ananya Sharma','text'=>'The accessories are absolutely beautiful. Premium quality and elegant design.'],
            ['name'=>'Pooja Verma','text'=>'Loved how versatile the jewellery is. Goes with both ethnic and western outfits.'],
            ['name'=>'Neha Jain','text'=>'Perfect gift choice! The finish and detailing is just amazing.'],
            ['name'=>'Riya Mehta','text'=>'Lightweight, classy and perfect for daily wear.'],
            ['name'=>'Kritika Malhotra','text'=>'Feels premium yet affordable. Definitely ordering again.'],
            ['name'=>'Sneha Kapoor','text'=>'Packaging, quality, delivery — everything felt very thoughtful.'],
        ] as $index => $review)

        <!-- Review Card -->
        <div
            class="
            rounded-3xl p-8 shadow-md transition-all duration-300
            cursor-pointer select-none
            hover:-translate-y-2 hover:shadow-xl
            active:scale-95
            {{ $index % 2 == 0 ? 'bg-[#d8c2ad]' : 'bg-[#efe4d8]' }}
            "
        >

            <!-- Stars -->
            <div class="text-yellow-500 mb-3">★★★★★</div>

            <!-- Review text -->
            <p class="text-gray-800 leading-relaxed mb-8">
                {{ $review['text'] }}
            </p>

            <!-- User -->
            <div class="flex items-center gap-4">
                <div
                    class="
                    w-12 h-12 rounded-full
                    {{ $index % 2 == 0 ? 'bg-[#b49478]' : 'bg-[#cbb39b]' }}
                    flex items-center justify-center
                    text-white font-medium
                    "
                >
                    {{ substr($review['name'],0,1) }}
                </div>

                <div>
                    <h4 class="font-medium text-gray-900">
                        {{ $review['name'] }}
                    </h4>
                    <p class="text-sm text-gray-700">
                        Verified Buyer
                    </p>
                </div>
            </div>

        </div>

        @endforeach

    </div>

</section>