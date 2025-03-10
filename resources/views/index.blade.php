<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego Bricks Store</title>
    <link rel="icon" href="{{ asset('assets\lego_bricks_store.jpg') }}" type="webp">
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-[#00337C] to-blue-400 w-screen min-h-screen overscroll-y-none">
    @include('partials.header');
    <div class="flex justify-center mx-2">
        <span class="flex items-start sm:items-center">
            <img class="w-16 sm:w-24 min-w-16 object-contain rounded-full aspect-square " src="https://yt3.ggpht.com/3De1LnNAxcRg51IbfMygW6FVUQqhAJnLsOINhPhAlNmtbvFADG6TnTGCCF0W5QsGYiBWLk1RGW8=s88-c-k-c0x00ffffff-no-rj" alt="" />
        </span>
        <div class="relative flex justify-end w-auto max-w-[60%] h-auto rounded-r-xl rounded-b-xl bg-blue-500 px-4 py-3 sm:py-5 m-3 sm:my-8">
            <p class="text-justify text-slate-300 font-semibold text-sm sm:text-base">
                Welcome to <abbr title="Lego Bricks Store" class="font-bold">our store</abbr>! This is our official website but you can also check out our shop in <a href="https://www.tokopedia.com/archive-legobricksstore" class="font-semibold hover:text-green-500 hover:border-b-2 border-green-500 transition-all duration-100 ease-in-out">tokopedia</a>.
                Happy shopping!
            </p>
        </div>
    </div>
    
    <!-- our best products -->
    <div class="flex justify-center">
        <div class="flex items-center text-slate-200 w-10/12 py-2">
            <h2 class="text-center text-base sm:text-2xl md:text-xl font-semibold my-6 sm:mt-2 md:my-2">PRODUCTS</h2>
            <div class="grow bg-slate-200 h-[3px] ml-4"></div>
        </div>
    </div>
    <div id="products" class="flex justify-center my-4">
        <div class="grid grid-cols-2 justify-items-center gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 grid-flow-row w-10/12">
            @foreach($products as $product)
            <a href="{{ route('product.read', $product->id) }}">
                <div class="glass w-40 sm:w-48 rounded-lg">
                    <img src="{{ asset($product->image) }}" alt="">
                    <div class="p-3">
                        <h4 class="text-sm sm:text-base">{{ $product->name }}</h4>
                        <h3 class="text-base sm:text-lg font-bold">Rp. {{ number_format($product->price,0,'.') }}</h3>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</body>
</html>