<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Born;
use App\Models\Death;
use App\Models\Amenage;
use App\Models\Demenage;

class HomeController extends Controller
{
    public function index()
    {
        $articles = collect([
            "borns" => Born::where("status", 1)->get(),
            "death" => Death::where("status", 1)->get(),
            "arrange" => Amenage::where("status", 1)->get(),
            "deme" => Demenage::where("status", 1)->get(),
            "job"  => Job::where("status", 1)->get()
        ]);
        return view("client.home", compact('articles'));
    }
}
