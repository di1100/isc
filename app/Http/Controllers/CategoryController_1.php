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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function get(){
        $id = request()->route("id");
        if(is_null($id)){
            $categories = Category::all();
            return view("categories", ["categories"=>$categories]);
        }
        $category = Category::find($id);
        if(is_null($category)){
            return redirect("category");
        }
        return view("category", ["category"=>$category]);
    }
}
