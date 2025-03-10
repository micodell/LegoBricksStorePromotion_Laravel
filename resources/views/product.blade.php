<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} | Lego bricks Store</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-[#00337C] to-blue-400 w-screen min-h-screen overscroll-y-none">
    @include('partials.header');
    <div class="flex flex-col justify-center items-center">
        <div class="glass w-xs sm:w-sm md:w-lg rounded-lg shadow-lg mb-4">
            <img src="{{ asset($product->image) }}" alt="" class="w-full object-cover">
            <div class="p-3">
                <span class="flex justify-between items-center">
                    <span>
                        <h4 class="text-base sm:text-lg">{{ $product->name }}</h4>
                        <h3 class="text-lg sm:text-xl font-bold">Rp. {{ number_format($product->price,0,'.') }}</h3>
                    </span>
                    <span class="my-2">
                        <a href="{{ $product->link_toped }}" class="bg-green-500 hover:bg-green-600 px-0 sm:px-3 py-2 rounded-lg text-white font-semibold text-sm sm:text-lg">Buy Now</a>
                    </span>
                </span>
                <p class="text-base text-gray-500 mt-4 mb-2  border-t-2 border-slate-300"></p>
                <p class=" text-justify text-gray-600">{{ $product->description }}</p>
            </div>
        </div>

        <div class="bg-red-300 w-full h-96 p-4"></div>
    </div>
    
</body>
</html>