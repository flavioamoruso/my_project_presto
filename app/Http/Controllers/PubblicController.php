<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\PubblicController;

class PubblicController extends Controller
{
    public function homepage() {
        
        $products=Product::take(3)->get()->sortByDesc('created_at');
        return view('welcome',
        compact('products'));
    }
    
    
    public function contactUs(){
        return view('contactUs');
    }

    public function categoryShow(Category $category){
        return view('categoryShow',
        compact('category'));
    }
    
    
    
    
}


