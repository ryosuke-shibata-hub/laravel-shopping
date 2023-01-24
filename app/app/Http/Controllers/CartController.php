<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class CartController extends Controller
{
    public function cart()
    {
        return view('cart.cart');
    }

    public function addToCart($id)
    {

        $product = Product::FindOrFail($id);
        $cartItems = session()->get('cartItems',[]);

        if (isset($cartItems[$id])) {
            //既にカートに入れていたら個数を+1
            $cartItems[$id]['quantity']++;
        } else {
            //新しくカートに入れるときはセッションに格納
            $cartItems[$id] = [
                'image_path' => $product->image_path,
                "name" => $product->name,
                'details' => $product->details,
                'brand' => $product->brand,
                'price' => $product->price,
                'quantity' => 1
            ];
        }


        session()->put('cartItems', $cartItems);
        return redirect()->back()->with('success','Product Add Cart');
    }

    public function delete(Request $request)
    {
        if ($request->id) {
            //sessionからアイテムIDを取得
            $cartItems = session()->get('cartItems');
            //セッションがセットされていたらdeleteから来たidをsessonから破棄する
            if (isset($cartItems[$request->id])) {
                unset($cartItems[$request->id]);
                session()->put('cartItems', $cartItems);
            }

            return redirect()->back()->with('success','Product deleted seccessfully');
        }
    }
}