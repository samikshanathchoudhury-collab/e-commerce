
<body class="bg-white">
    
     
<!-- ================= PAGE HEADER ================= -->

     
     @extends('layout.app')
@include('component.navbar')

<br>
<br>

    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-bold text-[#4a3f35] mb-4">
            Contact Us
        </h1>
        <p class="text-lg text-[#6b5e52] max-w-2xl mx-auto">
            Have a question about our accessories, orders, or collaborations?
            We’d love to hear from you.
        </p>
    </div>
</section>

<!-- ================= CONTACT SECTION ================= -->
<section class="py-24">
    
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">

            <!-- LEFT : CONTACT INFO -->
            <div>
                <p class="text-[#c2a27d] font-semibold mb-4">
                    GET IN TOUCH
                </p>

                <h2 class="text-4xl font-bold text-[#4a3f35] mb-6">
                    We’re Here to Help You
                </h2>

                <p class="text-gray-600 text-lg mb-10 leading-relaxed">
                    Whether you’re looking for the perfect accessory, need help
                    with an order, or want to collaborate — our team is always
                    ready to assist you.
                </p>

                <div class="space-y-8">

                    <!-- Address -->
                    <div>
                        <h3 class="font-semibold text-lg text-[#4a3f35] mb-2">
                            📍 Our Store
                        </h3>
                        <p class="text-gray-600">
                            Elegant Accessories<br>
                            Mumbai, Maharashtra, India
                        </p>
                    </div>

                    <!-- Email -->
                    <div>
                        <h3 class="font-semibold text-lg text-[#4a3f35] mb-2">
                            ✉ Email Us
                        </h3>
                        <p class="text-gray-600">
                            support@elegantaccessories.com
                        </p>
                    </div>

                    <!-- Phone -->
                    <div>
                        <h3 class="font-semibold text-lg text-[#4a3f35] mb-2">
                            ☎ Call Us
                        </h3>
                        <p class="text-gray-600">
                            +91 98765 43210
                        </p>
                    </div>

                </div>
            </div>

            <!-- RIGHT : CONTACT FORM -->
            <div class="bg-[#f5efe9] rounded-3xl p-10 shadow-xl">

                <h3 class="text-2xl font-bold text-[#4a3f35] mb-6">
                    Send Us a Message
                </h3>

                <form class="space-y-6">

                    <div>
                        <label class="block text-sm font-medium text-[#4a3f35] mb-2">
                            Full Name
                        </label>
                        <input type="text" placeholder="Your name"
                               class="w-full px-4 py-3 rounded-lg border border-[#687FE5]
                                      focus:outline-none focus:ring-2 focus:ring-[#687FE5]">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-[#4a3f35] mb-2">
                            Email Address
                        </label>
                        <input type="email" placeholder="you@example.com"
                               class="w-full px-4 py-3 rounded-lg border border-[#687FE5]
                                      focus:outline-none focus:ring-2 focus:ring-[#687FE5]">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-[#4a3f35] mb-2">
                            Subject
                        </label>
                        <input type="text" placeholder="Order / Product / Support"
                               class="w-full px-4 py-3 rounded-lg border border-[#687FE5]
                                      focus:outline-none focus:ring-2 focus:ring-[#687FE5]">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-[#4a3f35] mb-2">
                            Message
                        </label>
                        <textarea rows="5" placeholder="Write your message here..."
                                  class="w-full px-4 py-3 rounded-lg border border-[#687FE5]
                                         focus:outline-none focus:ring-2 focus:ring-[#687FE5]"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-[#687FE5] text-white py-4 rounded-full
                                   text-lg font-semibold hover:bg-[#0B2D72] transition">
                        Send Message
                    </button>

                </form>
            </div>

        </div>

    </div>
</section>

<!-- ================= FOOTER NOTE ================= -->
<section class="bg-[#f5efe9] py-10">
    <div class="text-center text-sm text-[#6b5e52]">
        © 2026 Elegant Accessories. All rights reserved.
    </div>
</section>

</body>
</html>
