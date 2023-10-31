<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Login;

class AuthController extends Controller
{
    /**
     * Handle user login.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request) {
        // Validate the input fields
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        // Retrieve user credentials from the request
        $credentials = $request->only('name', 'password');
    
        // Retrieve the user from the database based on the provided username
        $user = Login::where('name', $credentials['name'])->first();
    
        if ($user && $user->password === $credentials['password']) {
            // Authentication successful
            Auth::login($user); // Log in the user
            return redirect()->route('add_page'); // Use the named route 'add_page'
        }
    
        // Authentication failed
        return redirect()->route('login')->withSuccess('Oops! You have entered invalid credentials');
    }

    /**
     * Logout the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout() {
        // Clear the user session and log them out
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}
