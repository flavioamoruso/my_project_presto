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

    public function searchProducts(Request $request){
        
        $products=Product::search($request->searched)->paginate(10);

        // $products=Product::search($request->searched)->where('is_accepted',true)->paginate(10);

        return view('Products.index',compact('products'));
    }


    
    
    
    
}


