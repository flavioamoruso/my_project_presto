<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductCreateRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){

        $this->middleware('auth')->except('index','show');
    }


    public function index()
    {


        $products=Product::paginate(6);
        return view('products.index',
        compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('products.create',
        compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCreateRequest $request)
    {
        // dd($request->all());

        $product=Product::create([
            'title'=>$request->title,
            'price'=>$request->price,
            'body'=>$request->body,
            'img'=>$request->file('img')->store('public/img'),
            'user_id'=>Auth::id(),
            'category_id'=>$request->category
        ]);

        return redirect(route('products.create'))->with('message','Complimenti hai inserito un film');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show',
        compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',
        compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        if($request->file('img')){
            $img=$request->file('img')->store('public/img');

        }else{
            $img=$product->img;

        }

        $product->update([
            'title'=>$request->title,
            'price'=>$request->price,
            'body'=>$request->body,
            'img'=>$img,
            'user_id'=>Auth::id(),
            'category_id'=>$request->category
        ]);

        return redirect(route('products.edit',compact('product')))->with('message','Complimenti hai modificato un film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'))->with('message','Film eliminato con successo');
    }
}
