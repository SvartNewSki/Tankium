<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $productList = Product::where('amount', '>=', 1)->get();
        return view('main', ['products' => $productList]);
    }
}
