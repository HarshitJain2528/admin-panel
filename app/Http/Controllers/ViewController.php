<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AddPage;
class ViewController extends Controller
{
    public function index(){
        return view('index');
    }
    public function pagesummary(){
        if(Auth::check()){
            $data=AddPage::paginate(2);
            return view('pagesummary',compact('data'));
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function addpage(){
        if(Auth::check()){
            return view('pageadd');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function categorysummary(){
        if(Auth::check()){
            return view('categorysummary');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function addcategory(){
        if(Auth::check()){
            return view('categoryadd');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function productsummary(){
        if(Auth::check()){
            return view('productsummary');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function productadd(){
        if(Auth::check()){
            return view('productadd');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function changepassword(){
        if(Auth::check()){
            return view('changepassword');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
}
