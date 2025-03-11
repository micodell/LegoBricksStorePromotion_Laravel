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