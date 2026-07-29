<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\error;

class CartController extends Controller{
    public function index()
    {
       $cart = Session::get('cart', []);
       $total = 0;
        foreach ($cart as $item) {
           $total += $item['price'] * $item['quantity'];    
        }
       return view('cart', compact('cart', 'total'));
       
    }
        public function addToCart($id)
        {
        $product = Product::findOrFail($id);
        $cart = Session::get('cart', []);
        // Проверяем, есть ли вообще на остатках товара
        // if($cart[id].amount >= 0){
            // Проверяю, есть ли уже товар в корзину, если есть - добавляю квонтити
            if(isset($cart[$id])){
                $cart[$id]['quantity']++;
    
            } else {
                $cart[$id] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => 1,
                ];
            }
    // }
        // else{
            // return redirect()->back()->with('error', 'Товар "' . $product->name . '" уже выкупили!');
        // }
        
        Session::put('cart', $cart);

        // Редирект обратно на предыдущую страницу
        return redirect()->back()->with('success', 'Товар "' . $product->name . '" добавлен в корзину!');
        }
    public function buy(){
        $notEnough = [];
        $ava = [];
        $cart = Session::get('cart', []);
        foreach ($cart as $id){
            $stock = Product::find($id['id']);
            if ($stock->amount >= 1) {
                $stock->amount = $stock->amount - $id['quantity'];
                $stock->save();
                $ava[] = $stock->name;
            }
            else{
                $notEnough[] = $stock->name;
                continue;
            }
        }   
            Session::flush();
            return redirect()->back()->with('errorNE', $notEnough)->with('ava', $ava);

    }
    public function clear(){
        $cart = Session::flush();
        return redirect()->back();
    }
    }