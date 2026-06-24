<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class CartController extends Controller{
    public function cart(){
        return view('cart');
    }

    public function addToCart($id){
         // 1. Находим товар в БД
    $product = Product::findOrFail($id);
    
    // 2. Проверяем остаток (из условия задачи)
    if ($product->stock <= 0) {
        return back()->with('error', 'Товара нет на складе');
    }
    
    // 3. Получаем текущую корзину из сессии (или пустой массив)
    $cart = session()->get('cart', []);
session()->put('cart', $cart);
    
    return back()->with('success', 'Товар добавлен в корзину');
    
    }
    
    
}