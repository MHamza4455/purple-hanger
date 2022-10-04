<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function storeOrder(Request $request)
    {
        echo "Name : ";
        print_r( $request->name);  echo "<br>"; echo "Quantity : ";
        print_r(  $request->quantity);  echo "<br>";echo "Price : ";
        print_r(  $request->price);  echo "<br>";echo "Total : ";
        print_r(  $request->total);  echo "<br>";echo "Product_id : ";
        print_r(  $request->product_id);  echo "<br>";
    }
}
