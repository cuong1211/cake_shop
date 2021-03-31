<?php

namespace App;
class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __constant($cart){
        if($cart){
            $this->products = $cart->products;
            $this->products = $cart->totalPrice;
            $this->products = $cart->totalQuanty;
        }
    }

    public function AddCart($products, $id){
        $newProduct = ['quanty' => 0,'price'=> $products->price, 'productInfo' => $products];
        if($this->products){
            if(array_key_exists($id, $products)){
                $newProduct = $products[$id];
            }
            
        }
        $newProduct['quanty']++;
        $newProduct['ProductInfo'] = $newProduct['quanty'] * $products->price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $products->price;
        $this->totalQuanty++;
        
    }
}