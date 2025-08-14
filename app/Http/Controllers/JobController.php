<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{

    public function index()
    {
        $job = Job::all();

        return view("admin.job", compact('job'));
    }

    public function active($id)
    {
        $job =  Job::find($id);
        $job->status = $job->status==1?0:1;
        $job->isDirty("status");
        $job->isClean("status");
        $job->save();

        Flashy::success("Statut chargé avec succès");
        return Redirect::back();
    }

    public function c_index()
    {
        $jobs = Job::where("status", 1)->get();

        return view("client.job.list", compact('jobs'));
    }

    public function create()
    {
        return view("client.job.create");
    }

    public function store(Request $request)
    {

        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "tel" => "required",
            "service" => "required",
            "competence" => "required",
            "message" => "required"
        ]);
        $name= "";
        if (isset($request->avatar) && !is_null($request->avatar)) {

                /** Générer un nom à l'image */
                $filename = time() ."." . $request->avatar->extension();

                //Une instance de Image
                $imag = Image::make($request->avatar);
                //Créer le dossier
                $request->file("avatar")->storeAs("service",$filename, 'public');

                $image = $imag->save(storage_path().'/app/public/service/'.$filename);

                $name = "/service"."/".$image->basename;


        }

        Job::create([
            "firstname" => $request->nom,
            "lastname"  => $request->prenom,
            "service"   => $request->service,
            "qualification_competence" => $request->competence,
            "tel"       => $request->tel,
            "avatar"    => $name,
            "message"   => $request->message,
            "users_id"  => Auth::user()->id,
            "status"    => 0
        ]);
        Flashy::success("Service ajouté avec succès!!");
        return Redirect::route('home');
    }
}
