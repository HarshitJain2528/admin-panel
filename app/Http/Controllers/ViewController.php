<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('index');
    }
    public function pagesummary(){
        return view('pagesummary');
    }
    public function pageadd(){
        return view('pageadd');
    }
    public function categorysummary(){
        return view('categorysummary');
    }
    public function addcategory(){
        return view('categoryadd');
    }
    public function productsummary(){
        return view('productsummary');
    }
    public function productadd(){
        return view('productadd');
    }
    public function changepassword(){
        return view('changepassword');
    }
}
