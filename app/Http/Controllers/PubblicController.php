<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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


    public function submit(Request $request){

        // dd($request->all());

        $email=$request->input('email');
        $username=$request->input('username');
        $body=$request->input('body');

        Mail::to('amm.film@gmail.it')->send(new ContactMail($email,$username,$body));

        return redirect(route('contactUs'))->with('message','Hai inviato correttamente il messaggio,sarai ricontattato presto');

    }
    
    
    
    
}


