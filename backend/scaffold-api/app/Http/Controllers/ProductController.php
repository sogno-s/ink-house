<?php

namespace App\Http\Controllers;
use http\Env\Response;
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
            'linkToImage'=> 'nullable|string|max:255',
            'category_id'=>'nullable|exist:category,id',
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

    public function destroy($id){
        $product = Product::find($id);
        if (!$product){
            return response()->json(['message'=>'Product not found'], 404);
        }
        $product->delete();

        return response()->json(['message'=>'Product delete successfully']. 200);
    }

    public function show($id){
        $product = Product::with('category')->find($id);
        if (!$product){
            return response()->json(['message'=>'Product not found'],404);
        }
        return response()->json($product, 200);
    }
}
