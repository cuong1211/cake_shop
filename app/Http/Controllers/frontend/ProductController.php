<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\model\Product;

class ProductController extends Controller
{

    public function getProducts()
    {
        $products = Product::query()->latest()->paginate(9);
        return view('pages.frontend.home', compact('products'));
    }
    public function getSingle($id)
    {
        $products = Product::find($id);
       
        return view('pages.frontend.single', compact('products'));
    }
}