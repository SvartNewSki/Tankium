<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        // $productList = Product::where('amount', '>=', 1)->get();
        $productList = Product::all();
        return view('main', ['products' => $productList]);
    }
    public function item($id){
        $item = Product::findOrFail($id);
        return view('item', ['item' => $item]);
    }
}
