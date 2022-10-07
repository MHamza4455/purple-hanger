<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;
use App\Models\User;
use App\Models\Permission;
use DB;
use Cookie;
use Session;
class IndexController extends Controller
{
    public function index()
    {
        $products = Product::where('is_featured',1)->orderBy('created_at','desc')->take(8)->get();
        $latestproducts = Product::where('status',1)->orderBy('created_at','asc')->take(8)->get();
        $blogs = Blog::all();
        $data_blog = compact('blogs');
        $data = compact('products');
        $data_latest = compact('latestproducts');
        return view('Frontend.index')->with($data)->with($data_latest)->with($data_blog);
    }
    public function about()
    {
        return view('Frontend.about');
    }
    public function services()
    {
        return view('Frontend.services');
    }
    public function shop()
    {
        return view('Frontend.shop');
    }
    public function shopGrid()
    {
        return view('Frontend.shop-grid');
    }
    public function blog()
    {
        return view('Frontend.blog');
    }
    public function blogGrid()
    {
        return view('Frontend.blog-grid');
    }
    public function blogDetails()
    {
        return view('Frontend.blog-detail');
    }
    public function contact()
    {
        return view('Frontend.contact');
    }
    public function servicesDetails()
    {
        return view('Frontend.services-details');
    }
    public function checkOut()
    {
        if (Cookie::get('user') !== null){
            return view('Frontend.checkout');
        }
        else
        {
            return redirect('/FrontendLogin')->with('message', 'Logged in to Proceed Your Order.');
        }
        
    }
    public function productDetails($id)
    {
        $products =  Product::find($id);
        $data = compact('products');
        return view('Frontend.product-details')->with($data);
    }
    public function modalView($id)
    {
        $products =  Product::find($id);
        $data = compact('products');
        return view('Frontend.Modals.preview-modal')->with($data);
    }
    public function FrontendLogin()
    {
        return view('Frontend.login');
    }
    public function checkFrontendUser(Request $request)
    {
       $user = new User;
        // check user type if its legit then continue else redirect back with error
        $email = $request['email'];
        $users =  User::all();
        $check = false;
        $role = null;
        foreach($users as $data){
            if ($email == $data->email){
                $check = true;
                $user= $data;
                $role = $data->role;
                break;
            }
            else
            {
                $check = false;
            }
           
        }
        if($check == true){
           if($role == "customer"){
                if(\Auth::guard('customers')->attempt(['email' => $request['email'], 'password' => $request['password']])){
                    $customerData = (['email' => $request['email'], 'password' => $request['password']]);
                    //dd($customerData);
                    $user_id = $customerData;
                    $UserList = implode(', ', $user_id);
                    //dd($UserList);
                    Cookie::queue(Cookie::make('user', $UserList, 360));
                    return redirect()->route('cartSessionItems');
                };
           }
           else{
            echo "false";
            return redirect()->back()->with('messageLoginFailed', 'PLEASE TRY AGAIN WITH VALID EMAIL & PASSWORD.');
           }
        }
        else
        {
           return redirect()->back()->with('messageLoginFailed', 'PLEASE TRY AGAIN WITH VALID EMAIL & PASSWORD.');
        }
        // attempt to login and then redirect to home 
    }
    public function deleteUserCookie()
    {
        Cookie::queue(Cookie::forget('user'));
        Session::flush();
        return redirect('/');
    }
}
