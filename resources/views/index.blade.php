@extends('layouts.app')
@section('content')
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
    
    <div class="flex justify-center">
        <div class="flex items-center text-slate-200 w-10/12 py-2">
            <h2 class="text-center text-base sm:text-2xl md:text-xl font-semibold my-6 sm:mt-2 md:my-2">PRODUCTS</h2>
            <div class="grow bg-slate-200 h-[3px] ml-4"></div>
        </div>
    </div>
    @include('partials.products', ['products' => $products])
@endsection