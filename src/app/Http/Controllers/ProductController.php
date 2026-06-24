<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $productList = Product::all();
        return view('main', ['products' => $productList]);
    }
}
