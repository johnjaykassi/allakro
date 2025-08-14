<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminAuthController extends Controller
{
    public function login()
    {
        return view("admin.auth.login");
    }

    public function connect(Request $request)
    {

        if ( is_null($request->email) || is_null($request->password)) {
           return Redirect::back()->with("error", "Identifiant ou mot de passe incorrecte");
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) 
            if (Auth::user()->role == "admin") {
                return Redirect::route("admin.dashboard");
            }else{
                Auth::logout();
                return Redirect::back()->with("error", "Identifiant ou mot de passe incorrecte");
            }

        else 
           return Redirect::back()->with("error", "Identifiant ou mot de passe incorrecte");
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route("admin.login");
    }
}
