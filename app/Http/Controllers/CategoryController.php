<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class CategoryController extends Controller
{
    //
    
    public function staticCreate(){
        Category::firstOrCreate([
            'name' => 'First Category'
        ]);
        Category::firstOrCreate([
            'name' => 'Second Category'
        ]);
        return "Categories are ready";

    }
    public function create(){
        $data = request()->all();
        $category = new Category();
        $category->name = array_get($data, "name");
        $category->save();
        return redirect(route("category.get"));
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function xhrCreate(){
        if(request()->ajax()){
            $data = request()->all();
            return response()->json(["data"=>$data]);
        }
        
    }


    
    public function xhrGetArticlesByCategory(){
        $id = request()->route("id");
//        if(is_null($id)){
//            $categories = Category::all();
//            return response()->json($categories);
//        }
        $category = Category::find($id);
//        if(is_null($category)){
//            response()->json(["error"=>"Category doesn't exist"]);
//        }
        return response()->json($category->articles);
    } 

    public function get(){
        $id = request()->route("id");
        if(is_null($id)){
            $categories = Category::all();
            return view("categories", ["categories"=>$categories]);
        }
        $category = Category::find($id);
        if(is_null($category)){
            return redirect(route("category.get"));
        }
        return view("category", ["category"=>$category]);
    }
    
    public function xhrGet(){
        $id = request()->route("id");
        if(is_null($id)){
            $categories = Category::all();
            return response()->json($categories);
        }
        $category = Category::find($id);
        if(is_null($category)){
            response()->json(["error"=>"Category doesn't exist"]);
        }
        return response()->json($category);
    }
}
