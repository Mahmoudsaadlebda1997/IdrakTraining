<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function  index(){
        $products =Product::all();
//        dd($prodcuts);
        return view ('products.index',compact('products'));
    }
    public function create(){
        return view ('products.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:30',
            'price' => 'required|max:30|min:0',
        ]);
        $newProduct = new Product();
        $newProduct->name = $request->name;
        $newProduct->price = $request->price;
        $newProduct->save();
        return redirect()->route('getProducts');
    }
    public function edit($id){
        $product =Product::findOrFail($id);
        return view ('products.update',compact('product'));
    }
    public function update(Request $request ,$id){
        $this->validate($request, [
            'name' => 'required|max:30',
            'price' => 'required|max:30|min:0',
        ]);
        $product =Product::findOrFail($id);
        $product->name =$request->name;
        $product->price =$request->price;
        $product->save();
        return redirect()->route('getProducts');
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view ('products.show',compact('product'));

    }
    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('getProducts');

    }

}
