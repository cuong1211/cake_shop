<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function getProducts()
    {
        $products = Product::query()->latest()->get();
        
        return view('pages.frontend.home', compact('products'));
    }
}