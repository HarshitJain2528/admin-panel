<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Login;

class AuthController extends Controller
{
    public function postLogin(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('name', 'password');
    
        // Retrieve the user from the database based on the provided username
        $user = Login::where('name', $credentials['name'])->first();
    
        if ($user && $user->password === $credentials['password']) {
            // Authentication successful
            return redirect()->intended('add-page');
        }
    
        // Authentication failed
        return redirect("login")->withSuccess( 'Oops! You have entered invalid credentials');
    }
    
    
    
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
    
}
