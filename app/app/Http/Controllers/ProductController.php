<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view('shop.index')
        ->with('products', $products);
    }

    public function show($id)
    {
        // $details = Product::where('id',$id)->get();
        //FindOrFailでとるとforeachしなくても一見だった時に取れるよ
        $details = Product::FindOrFail($id);
// dd($details);
        return view('shop.show')
        ->with('details',$details);
    }
}