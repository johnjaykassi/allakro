<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index()
    {
        return view("client.profil.profil");
    }

    public function edit()
    {
        return view('client.profil.edit');
    }

    public function update(Request $request)
    {

        $request->validate([
            "nom"   => "required",
            "email" => "required|email",
            "tel"   => "required|numeric",
        ]);

        Flashy::success("Votre profil a été modifier avec succès!!");
        return Redirect::route('profil');

        $user = Auth::user();
        $user->name = $request->nom;
        $user->email = $request->email;
        $user->tel = $request->tel;

        $user->isDirty("name");
        $user->isDirty("email");
        $user->isDirty("tel");

        $user->isClean("name");
        $user->isClean("email");
        $user->isClean("tel");

        $user->save();

        return Redirect::route("profil");

    }


}

