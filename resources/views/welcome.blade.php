<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FFFF] min-h-screen">
   @extends('layout.app')

   @section('content')
      @include('component.navbar')
      @include('component.hero')
       @include('component.whychooseus')
      @include('component.newarrivals')
      @include('component.products')
      @include('component.customerreview')
      @include('component.footer')
   @endsection
</body>
</html>
