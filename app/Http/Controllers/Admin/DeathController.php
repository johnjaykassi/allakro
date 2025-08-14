<?php

namespace App\Http\Controllers\Admin;

use App\Models\Death;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DeathController extends Controller
{
    public function index()
    {
        $deaths = Death::all();

        return view("admin.death", compact('deaths'));
    }

    public function active($id)
    {
        $death =  Death::find($id);
        $death->status = $death->status==1?0:1;
        $death->isDirty("status");
        $death->isClean("status");
        $death->save();

        Flashy::success("Statut chargé avec succès");
        return Redirect::back();
    }
    public function c_index()
    {
        $deaths = Death::where("status", 1)->get();

        return view("client.death.list", compact('deaths'));
    }

    public function create()
    {
        return view("client.death.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "sexe" => "required",
            "ville" => "required",
            "date_born" => "required|date",
            "date_death" => "required|date",
            "parent" => "required",
            "mode" => "required",
            "fonction" => "required",
            "motif" => "required",
        ]);

        Death::create([
            "firstname" => $request->nom,
            "lastname" => $request->prenom,
            "sexe" => $request->sexe,
            "date_born" => $request->date_born,
            "date_death" => $request->date_death,
            "mode" => $request->mode,
            "motif" => $request->motif,
            "function" => $request->fonction,
            "prent_name" => $request->parent,
            "city_live" => $request->ville,
            "users_id" => Auth::user()->id,
            "status" => 0
        ]);


        Flashy::success("Nouveau décès ajouté avec succès");
        return Redirect::route('home');
    }

}
