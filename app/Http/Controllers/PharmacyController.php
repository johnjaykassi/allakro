<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PharmacyController extends Controller
{

public function index()
{
    $pharmacies = Pharmacy::all();
    return view('pharmacies.index', compact('pharmacies'));
}

public function create()
{
    return view("pharmacies.create");
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'address' => 'required',
    ]);

    Pharmacy::create($data);

    return redirect()->route('pharmacies.create')->with('success', 'Pharmacie ajoutée avec succès');
}

}
