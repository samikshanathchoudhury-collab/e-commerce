<section class="relative w-full h-screen overflow-hidden bg-white">

    <!-- HEADING (CENTER FIX) -->
    <div class="relative z-20 w-full flex justify-center text-center pt-12">
        <div>
            <h1 class="text-5xl font-serif text-red-800 ">
                New Arrivals
            </h1>
            <p class="text-gray-500 mt-2">
                Latest accessories collection
            </p>
        </div>
    </div>

    <!-- CAROUSEL WRAPPER (UP LIFTED) -->
    <div class="gallery relative w-full h-[420px] mt-6 flex items-center justify-center">
        <ul class="cards relative w-[900px] h-[380px]">
             <li class="card"
                style="position:absolute;top:50%;left:50%;width:260px;height:360px;
                       transform:translate(-50%,-50%);
                       border-radius:18px;overflow:hidden;
                       box-shadow:0 25px 50px rgba(0,0,0,.25);">
                <img src="{{ asset('images/1.jpg') }}"
                     style="width:100%;height:100%;object-fit:cover;">
            </li>

            <li class="card"
                style="position:absolute;top:50%;left:50%;width:260px;height:360px;
                       transform:translate(-50%,-50%);
                       border-radius:18px;overflow:hidden;
                       box-shadow:0 25px 50px rgba(0,0,0,.25);">
                <img src="{{ asset('images/2.jpg') }}"
                     style="width:100%;height:100%;object-fit:cover;">
            </li>

            <li class="card"
                style="position:absolute;top:50%;left:50%;width:260px;height:360px;
                       transform:translate(-50%,-50%);
                       border-radius:18px;overflow:hidden;
                       box-shadow:0 25px 50px rgba(0,0,0,.25);">
                <img src="{{ asset('images/3.jpg') }}"
                     style="width:100%;height:100%;object-fit:cover;">
            </li>

            <li class="card"
                style="position:absolute;top:50%;left:50%;width:260px;height:360px;
                       transform:translate(-50%,-50%);
                       border-radius:18px;overflow:hidden;
                       box-shadow:0 25px 50px rgba(0,0,0,.25);">
                <img src="{{ asset('images/4.jpg') }}"
                     style="width:100%;height:100%;object-fit:cover;">
            </li>

            <li class="card"
                style="position:absolute;top:50%;left:50%;width:260px;height:360px;
                       transform:translate(-50%,-50%);
                       border-radius:18px;overflow:hidden;
                       box-shadow:0 25px 50px rgba(0,0,0,.25);">
                <img src="{{ asset('images/5.jpg') }}"
                     style="width:100%;height:100%;object-fit:cover;">
            </li>

        </ul>

    
    </div>

  <!-- BUTTONS (PROFESSIONAL CENTERED) -->
<div class="relative z-20 w-full flex justify-center text-center pt-12 gap-2">

    <!-- PREV -->
    <button class="prev w-12 h-12 flex items-center justify-center rounded-full 
                   bg-white/90 backdrop-blur shadow-lg hover:bg-black 
                   transition group">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-5 h-5 text-black group-hover:text-white transition"
             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    <!-- NEXT -->
    <button class="next w-12 h-12 flex items-center justify-center rounded-full 
                   bg-white/90 backdrop-blur shadow-lg hover:bg-black 
                   transition group">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-5 h-5 text-black group-hover:text-white transition"
             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 5l7 7-7 7" />
        </svg>
    </button>

</div>

</section>

       