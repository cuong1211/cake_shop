<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    private $rules = [
        'name' => 'required|max:200|utegonique:caries',
        'description' => 'required|max:500',
        'image' => 'required|max:200',
    ];
    private $errors = [
        'name.required' => 'Please enter name.',
        'name.max'      => 'Name too long.',
        'name.unique'      => 'This name was exist.',

        'description.required' => 'Please enter description.',
        'description.max'      => 'description too long.',

        'image.required' => 'Please enter image.',
        'image.max'      => 'image too long.',
    ];

    public function getProducts()
    {
        $products = Product::query()->latest()->get();
        
        return view('pages.backend.product.main', compact('products'));
    }

//     public function createCategories()
//     {
//         return view('pages.category.create');
//     }

//     public function postCreateCategories(Request $request)
//     {
//         $validator = Validator::make($request->all(), $this->rules, $this->errors)->validate();
//         $categories = Category::create([
//             "name" => $request->name,
//             "description" => $request->description,
//             "image" => $request->image,
//         ]);
//         if ($categories) {
//             return redirect('category')->with('success', 'Add category successful!');
//         }
//         return redirect('category')->with('error', 'Have trouble! try again later.');
//     }
}
