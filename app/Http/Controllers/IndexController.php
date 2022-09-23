<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('Frontend.index');
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
    public function cart()
    {
        return view('Frontend.cart');
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
        return view('Frontend.checkout');
    }
}
