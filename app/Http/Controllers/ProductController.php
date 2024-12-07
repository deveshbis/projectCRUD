<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProductView()
    {
        return view('product.create');
    }

    public function createProduct(Request $request)
    {


        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);


        $product = new Product;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('home')->with('success', 'Product Added Succesfully');
    }

    public function getPruductList()
    {
        $products = Product::get();

        return view('welcome', compact('products'));
    }


    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    public function updateProduct(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ];

        $update = Product::where(['id' => $request->id])->update($data);

        return redirect()->route('home')->with('success', 'Product Updated Succesfully');
    }

    public function deleteProduct(Request $request)
    {
        $delete = Product::where(['id' => $request->id])->delete();

        return redirect()->route('home')->with('success', 'Product Deleted Succesfully');
    }
}
