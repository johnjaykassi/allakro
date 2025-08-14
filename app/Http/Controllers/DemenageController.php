<?php

namespace App\Http\Controllers;

use App\Models\Demenage;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DemenageController extends Controller
{

    public function index()
    {
        $deme = Demenage::all();

        return view("admin.relocate", compact('deme'));
    }

    public function active($id)
    {
        $deme =  Demenage::find($id);
        $deme->status = $deme->status==1?0:1;
        $deme->isDirty("status");
        $deme->isClean("status");
        $deme->save();

        Flashy::success("Statut chargé avec succès");
        return Redirect::back();
    }

    public function c_index()
    {
        $demes = Demenage::where("status", 1)->get();

        return view("client.demenage.list", compact('demes'));
    }

     public function create()
    {
        return view("client.demenage.create");
    }

    public function store(Request $request)
    {

        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "ville" => "required",
            "sexe" => "required",
            "date_born" => "required|date",
            "fonction" => "required",
            "n_destine" => "required",
        ]);

        Demenage::create([
            "firstname" => $request->nom,
            "lastname" => $request->prenom,
            "date_born" => $request->date_born,
            "function" => $request->fonction,
            "sexe" => $request->sexe,
            "city_live" => $request->ville,
            "nou_destination" => $request->n_destine,
            "users_id" => Auth::user()->id,
            "status" => 0
        ]);
        Flashy::success("Aménagement ajouté avec succès!!");
        return Redirect::route('home');
    }
}
