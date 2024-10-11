<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use http\Env\Response;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return response()->json(Category::all(), 200);
    }

    public function addCategory(Request $request){
        $this->validate($request, [
           'name'=>'required|string|max:255',
        ]);
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    public function destroy($id){
        $category = Category::find($id);
        if (!$category){
            return response()->json(['message'=>'Category not found'], 404);
        }
        $category->delete();

        return response()->json(['message'=>'Category deleted successfully']. 200);
    }

    public function showProductInCategory($id){
        $category = Category::with('products')->find($id);
        if (!$category){
            return response()->json(['message'=>'Category not found']);
        }
        return response()->json($category, 200);
    }
}
