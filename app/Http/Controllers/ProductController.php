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
        $newProduct = new Product();
        $newProduct->name = $request->name;
        $newProduct->price = $request->price;
        $newProduct->save();
        return redirect()->route('getProducts');
    }
}
