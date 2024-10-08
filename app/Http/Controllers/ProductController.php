<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return response()->json(Product::all(), 200);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric',
        ]);
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function uploadImage(Request $request){
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $path = $request->file('image')->store('images');

        return response()->json(['path'=>$path], 201);
    }
}
