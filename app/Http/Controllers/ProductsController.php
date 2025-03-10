<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', ['products'=>$products]);
    }

    public function read($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }
}
