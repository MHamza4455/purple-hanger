<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function orderList()
    {
        return view('orders');
    }
    public function storeOrder(Request $request)
    {
        echo "Name : ";
        print_r( $request->name);  echo "<br>"; echo "Quantity : ";
        print_r(  $request->quantity);  echo "<br>";echo "Price : ";
        print_r(  $request->price);  echo "<br>";echo "Total : ";
        print_r(  $request->total);  echo "<br>";echo "Product_id : ";
        print_r(  $request->product_id);  echo "<br>";echo "address : ";
        echo $request->address; echo "<br>";echo "shipmetod : ";
        echo $request->ship_method; echo "<br>";echo "payment_method : ";
        echo $request->payment_method; echo "<br>";
        // $orders = new Order;

        // $product_id = $request['product_id']; 
        // $ProductList = implode(', ', $product_id);
        // $orders->product_id = $ProductList;

        // $orders->address = $request->address;
        // $orders->ship_method = $request->ship_method;
        // $orders->payment_method = $request->payment_method;

        // $price = $request['price']; 
        // $priceList = implode(', ', $price);
        // $orders->price = $priceList;

        // $quantity = $request['quantity']; 
        // $quantityList = implode(', ', $quantity);
        // $orders->quantity = $quantityList;
        // $orders->save();
    }
}
