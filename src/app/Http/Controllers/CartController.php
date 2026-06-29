<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\error;

// class CartController extends Controller{
//     public function cart(){
//         return view('cart');
//     }

//     public function addToCart($id){
//          // 1. Находим товар в БД
//     $product = Product::findOrFail($id);
//     $cart = Session::get('cart', []);
    
//     // 2. Проверяем остаток (из условия задачи)
//     if ($product->amount <= 0) {
//         return back()->with('error', 'Товара нет на складе');
//     }


// if (isset($cart[$id])) {
//             $cart[$id]['quantity']++;
//         } else {
//             $cart[$id] = [
//                 'name' => $product->name,
//                 'price' => $product->price,
//                 'quantity' => 1,
//                 'image' => $product->image ?? null,
//                 'amount' => $product->amount
//             ];
//         }
        
//         Session::put('cart', $cart);
        
//         return redirect()->back()->with('success', 'Товар добавлен в корзину!');
    
//     // 3. Получаем текущую корзину из сессии (или пустой массив)
//     $cart = session()->get('cart', []);
// session()->put('cart', $cart);
    
//     return back()->with('success', 'Товар добавлен в корзину');
    
//     }
    
    
// }
class CartController extends Controller{
public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = Session::get('cart', []);
        
        // Если товар уже есть в корзине, увеличиваем количество
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image ?? null
            ];
        }
        
        Session::put('cart', $cart);
        
        // Редирект обратно на предыдущую страницу
        return redirect()->back()->with('success', 'Товар "' . $product->name . '" добавлен в корзину!');
    }
     public function index()
    {
        $cart = Session::get('cart', []);
        $total = 0;
        
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        
        return view('cart', compact('cart', 'total'));
    }
    }