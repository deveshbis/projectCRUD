<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProductView(){
        return view('product.create');
    }

    public function createProduct(Request $request){
        
        $product = new Product;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('home')->with('success', 'Product Added Succesfully');
    }

    public function getPruductList() {
        $products = Product::get();

        return view('welcome', compact('products'));
    }
}
