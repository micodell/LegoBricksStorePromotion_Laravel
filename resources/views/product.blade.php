@extends('layouts.app')
@section('content')
    <div class="flex flex-col justify-center items-center my-12">
        <div class="glass w-xs sm:w-sm md:w-lg rounded-lg shadow-lg mb-4">
            <img src="{{ asset($product->image) }}" alt="" class="w-full object-cover">
            <div class="p-3">
                <span class="flex justify-between items-center">
                    <span>
                        <h4 class="text-base sm:text-lg">{{ $product->name }}</h4>
                        <h3 class="text-lg sm:text-xl font-bold">Rp. {{ number_format($product->price,0,'.') }}</h3>
                    </span>
                    <span class="my-2">
                        <div class="min-w-24 flex grow justify-center">
                            <a href="{{ $product->link_toped }}" class="bg-green-500 hover:bg-green-600 px-1.5 sm:px-3 py-2 rounded-lg text-white font-semibold text-sm sm:text-base md:text-lg">Buy Now</a>
                        </div>
                    </span>
                </span>
                <p class="text-base text-gray-500 mt-4 mb-2  border-t-2 border-slate-300"></p>
                <p class=" text-justify text-gray-600">{{ $product->description }}</p>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="flex items-center text-slate-200 w-10/12 py-2">
            <h2 class="text-center text-base sm:text-2xl md:text-xl font-semibold my-6 sm:mt-2 md:my-2">OTHER PRODUCTS</h2>
            <div class="grow bg-slate-200 h-[3px] ml-4"></div>
        </div>
    </div>
    @include('partials.products', ['products' => $products])
@endsection