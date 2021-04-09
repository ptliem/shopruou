<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    function index(){
        return view('index');//Trỏ tới index
    }
    function contacts(){
        return view('contacts');//Trỏ tới contacts
    }
    function checkout(){
        return view('checkout');//Trỏ tới checkout
    }
    function page404(){
        return view('page404');//Trỏ tới pricing
    }
    function about(){
        return view('about');//Trỏ tới pricing
    }
    function shopping_cart(){
        return view('shopping_cart'); //Trỏ tới shoppingcart
    }
    function product(){
        return view('product'); //Trỏ tới prodcut
    }
    function login(){
        return view('login'); //Trỏ tới login
    }
    function pricing(){
        return view('pricing'); //Trỏ tới pricing
    }
    function product_type(){
        return view('product_type'); //Trỏ tới product_type
    }
    function signup(){
        return view('signup'); //Trỏ tới signup
    }
    

}
