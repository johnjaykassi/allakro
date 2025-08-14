<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Amenage;
use App\Models\Born;
use App\Models\Death;
use App\Models\Demenage;
use App\Models\Job;
use Illuminate\Http\Request;

class DashboadController extends Controller
{
    public function index()
    {
        $data = [
            "born" => Born::count(),
            "death" => Death::count(),
            "arrange" => Amenage::count(),
            "deme"   => Demenage::count(),
            "job"    => Job::count(),
        ];
       return view("admin.dashboad", compact('data')) ;
    }
}
