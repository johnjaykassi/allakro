<?php

namespace App\Http\Controllers\Admin;

use App\Models\Amenage;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ArrangeController extends Controller
{
    public function index()
    {
        $arrangs = Amenage::all();

        return view("admin.arrange", compact('arrangs'));
    }

    public function active($id)
    {
        $arrange =  Amenage::find($id);
        $arrange->status = $arrange->status==1?0:1;
        $arrange->isDirty("status");
        $arrange->isClean("status");
        $arrange->save();

        Flashy::success("Statut chargé avec succès");
        return Redirect::back();
    }

    public function c_index()
    {
        $arrangs = Amenage::where("status", 1)->get();

        return view("client.arrange.list", compact('arrangs'));
    }

    public function create()
    {
        return view("client.arrange.create");
    }

    public function store(Request $request)
    {

        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "ville" => "required",
            "sexe" => "required",
            "date_born" => "required|date",
            "provenance" => "required",
            "parent" => "required",
            "mode" => "required",
            "fonction" => "required",
        ]);

        Amenage::create([
            "firstname" => $request->nom,
            "lastname" => $request->prenom,
            "date_born" => $request->date_born,
            "provenance" => $request->provenance,
            "mode_heb" => $request->mode,
            "sexe"     => $request->sexe,
            "function" => $request->fonction,
            "parent_name" => $request->parent,
            "city_live" => $request->ville,
            "users_id" => Auth::user()->id,
            "status" => 0
        ]);
        Flashy::success("Aménagement ajouté avec succès!!");
        return Redirect::route('home');
    }

}
