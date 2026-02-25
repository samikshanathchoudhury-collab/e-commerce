

<body class="bg-[#fdeeee]"></body>

    @extends('layout.app')
@include('component.navbar')






<!-- ================= LOGIN BOX ================= -->
<div class="w-full flex justify-center mt-8">

    <div class="w-[600px] h-[750px] bg-white shadow-sm">

        <!-- TOP IMAGE -->
        <img src="{{ asset('images/Eve Accessories.png') }}"
             class="w-full h-[290px] object-cover">

        <!-- LOGIN CONTENT -->
        <div class="p-8">

            <h2 class="text-3xl font-bold text-gray-800">
                Login <span class="font-normal text-gray-500 text-2xl">or Signup</span>
            </h2>

            <!-- MOBILE FIELD -->
            <div class="mt-6 border border-gray-300 flex items-center h-12">

                <span class="px-3 text-gray-500 border-r">+91</span>

                <input type="text"
                       placeholder="Mobile Number*"
                       class="flex-1 px-3 outline-none text-sm">
            </div>

            <!-- TERMS -->
            <div class="flex items-start gap-2 mt-6 text-sm text-gray-600">
                <input type="checkbox" class="mt-1">
                <p>
                    By continuing, I agree to the
                    <span class="text-pink-500 font-semibold">Terms of Use</span>
                    &
                    <span class="text-pink-500 font-semibold">Privacy Policy</span>
                    and I am above 18 years old.
                </p>
            </div>

            <!-- BUTTON -->
            <button class="w-full mt-6 bg-[#687FE5]  text-white font-bold py-3 tracking-wide">
                CONTINUE
            </button>

            <!-- HELP -->
            <p class="mt-6 text-sm text-gray-600">
                Have trouble logging in?
                <span class="text-pink-500 font-semibold cursor-pointer">Get help</span>
            </p>

        </div>

    </div>

</div>


<!-- GAP BEFORE FOOTER -->
<div class="mt-20"></div>
@include('component.footer')

</body>
</html>
