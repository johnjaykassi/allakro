<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function accueil()
    {
        return view("client.accueil");
    }


    public function register()
    {
        return view("client.register");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "email" => "required|email|unique:users,email",
            "tel"  => "required|numeric|unique:users,tel",
            'password' => "required|confirmed"
        ]);

        User::create([
            "name" => $request->nom,
            "tel"  => $request->tel,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role"    => "user"
        ]);

        /* if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return Redirect::back()->with("error", "Identifiant ou mot de passe incorrecte");
        } */
        return Redirect::route('login');
    }


    public function login()
    {
        return view("client.login");
    }

    public function auth(Request $request)
    {

        if ( is_null($request->email) || is_null($request->password)) {
            return Redirect::back()->with("error", "Identifiant ou mot de passe incorrecte");
         }

         if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
             if (Auth::user()->role == "user") {
                 return Redirect::route("home");
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
        return Redirect::route("login");
    }
}
