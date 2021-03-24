<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    private $rules = [
        'name' => 'required|max:200|unique:products',
        'description' => 'required|max:500',
        
    ];
    private $errors = [
        'name.required' => 'Please enter name.',
        'name.max'      => 'Name too long.',
        'name.unique'      => 'This name was exist.',

        'description.required' => 'Please enter description.',
        'description.max'      => 'description too long.',

        
    ];

    public function getProducts()
    {
        $products = Product::query()->latest()->get();
        
        return view('pages.backend.product.main', compact('products'));
    }

    public function createProducts()
    {
        return view('pages.backend.product.create');
    }

    public function postcreateProducts(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules, $this->errors)->validate();
        $products = Product::create([
            "name" => $request->name,
            "description" => $request->description,
            "price"=> $request->price,
            
        ]);
        if ($products) {
            return redirect('admin')->with('success', 'Add product successful!');
        }
        return redirect('admin')->with('error', 'Have trouble! try again later.');
    }
    public function editProducts($id)
    {
        $products = Product::find($id);
        // $cateproduct = Product::find($id)->categories()->pluck('categories.id')->toArray();
        // $categories = Category::query()->latest()->get();
        return view('pages.backend.product.edit', compact('products'));
    }

    public function posteditProducts(Request $request, $id)
    {
        $this->rules['name'] = [
            'required',
            'max:255',
            'unique:products,name,'.$id
        ];
        $validator = Validator::make($request->all(), $this->rules, $this->errors)->validate();
        $products = Product::find($id)->update([
                "name" => $request->name,
                "description" => $request->description,
                "price"=>$request->price
        ]);
        if ($products) {
            return redirect('admin')->with('success','Edit product successful');
        }
        return redirect('admin')->with('error','Have trouble, Try again later.');
    }
    public function deleteProducts($id)
    {
        $products = Product::find($id)->delete();
        if ($products) {
            return redirect('admin')->with('success','Delete product successful');
        }
        return redirect('admin')->with('error','Have trouble, Try again later.');
    }
}
