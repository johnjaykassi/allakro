<?php

namespace App\Http\Controllers\Admin;

use App\Models\Born;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BornController extends Controller
{
    public function index()
    {
        $borns = Born::all();

        return view("admin.born", compact('borns'));
    }

    public function active($id)
    {
        $born =  Born::find($id);
        $born->status = $born->status==1?0:1;
        $born->isDirty("status");
        $born->isClean("status");
        $born->save();

        Flashy::success("Statut chargé avec succès");
        return Redirect::back();
    }

    public function c_index()
    {
        $borns = Born::where("status", 1)->get();
        return view("client.born.born", compact("borns"));
    }

    public function create()
    {
        return view("client.born.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "sexe" => "required",
            "ville" => "required",
            "date" => "required|date",
            "pere" => "required",
            "mere" => "required"
        ]);

        Born::create([
            "firstname" => $request->nom,
            "lastname" => $request->prenom,
            "sexe" => $request->sexe,
            "date_born" => $request->date,
            "dad_name" => $request->pere,
            "mother_name" => $request->mere,
            "city_live" => $request->ville,
            "users_id" => Auth::user()->id,
            "status" => 0
        ]);

        Flashy::success("Nouveau né ajouté avec succès");
        return Redirect::route('home');
    }
}
