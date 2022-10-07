<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use Cookie;
use Session;
use App\Models\User;
use App\Models\Cart;
class cartController extends Controller
{
    public function cart()
    {
        if (Cookie::get('user') !== null) 
        {
            $cart = Cart::all();
            $data = compact('cart');
            return view('Frontend.cart')->with($data);

        }
        else
        {
            return view('Frontend.cart');
        }
        
    }
    public function addToCart($id)
    {
        $match = false;
        if(Cookie::get('user') !== null){
            $already_data_in_cart = Cart::all();
            foreach($already_data_in_cart as $data){
                if($id == $data->products->id)
                {
                    //echo "Id FROM Back".$id."<br>";
                   // echo "Id FROM carts".$data->products->id."<br>";
                    $match = true;
                    break;
                }
                else
                {
                    $match = false;
                    
                }
            }
            if($match == true){
                //echo "Product Match<br>";
                return redirect()->back()->with('message', 'Product added to cart successfully!');
            }
            else
            {
              //  echo "Product nOt Match<br>";
                $cart = new cart;
                //user id 
                $cookie =  Cookie::get('user');
                $arr = array_slice(explode(',', $cookie), 0);
                $email = $arr[0];
                $user = User::all(); echo "<br>";
                foreach($user as $data)
                {
                    if($email == $data->email){
                        $user_id = $data->id;
                    }
                }
                $cart = Cart::create
                ([
                    'user_id'=> $user_id,
                    'product_id'=>$id,
                    'quantity'=> 1
                ]);
                return redirect()->back()->with('meessageAddtoCart', 'Product added to cart successfully!');
            }
           
        }
        else{
            $product = Product::findOrFail($id);
           
            $cart = session()->get('cart', []);
       
            if(isset($cart[$id])) 
            {
                $cart[$id]['quantity']++;
            } 
            else 
            {
                $cart[$id] = [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->offer_price,
                    "image" => $product->thumbnail
                ];
            } 
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
       
    }
   
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
       
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    } 
    public function cartSessionItems(Request $request)
    {
        //user id
        $user = \Auth::guard('customers')->user();


        if(!empty($_SESSION['cart'])){
            echo "Cart Empty.";
         }
         else{
        
            $cartSessionItems = session()->get('cart', []);

            $cartItems = $user->cart;
            foreach($cartSessionItems as $id => $item){
                $check = Cart::where('user_id',$user->id)->where('product_id',$id)->count();

                if($check == 0){
                    $data = [
                        'product_id' => $id,
                        'quantity' => $item['quantity'],
                        'user_id' => $user->id,
                    ];

                    $user->cart()->create($data);

                }
            }
            Session::flush();
            return redirect('/')->with('messageLoginSuccessfully' , 'Logged in Successfully.');
        }
    }
    public function removeFromCartAjax(Request $request)
    {
        $cart = Cart::find($request->id)->delete();
        $carts = Cart::all();
        $total = 0;
        foreach($carts as $data)
        {
            $total += $data->products->offer_price;
        }
        return response()->json([
            'status' => 1,
            'message'=>'Item Deleted Successfully.',
            'total' => $total
        ]);
    }
    public function UpdateCartItemAjax(request $request)
    {
        $cart = Cart::find($request->id);
        $quantity = $cart->quantity + 1;
        $subtotal = $quantity * $cart->products->offer_price;
        $cart->quantity = $quantity;
        $cart->save();
        $carts = Cart::all();
        $total = 0;
        foreach($carts as $data)
        {
            $total += $data->quantity * $data->products->offer_price;
        }
        return response()->json([
            'status' => 1,
            'message'=>'Item Updated Successfully.',
            'subtotal' => $subtotal,
            'quantity' => $quantity,
            'total' => $total
        ]);
        
    }
}
