<?php 
namespace App\helper;

use App\Models\Amenage;
use App\Models\Born;
use App\Models\Death;
use App\Models\Demenage;
use App\Models\Job;

class Help{

    public static function notifyCount()
    {
        $count = 0;
        $notify = [
            "born" => Born::where("status", 0)->count(),
            "death" => Death::where("status", 0)->count(),
            "arrange" => Amenage::where("status", 0)->count(),
            "relocate" => Demenage::where("status", 0)->count(),
            "Job"      => Job::where("status", 0)->count()
        ];
        foreach ($notify as $value) {
            $count += $value;
        }
        return $count;
    }

    public static function notifySingle()
    {
        
        $notify = [
            "born" => Born::where("status", 0)->count(),
            "death" => Death::where("status", 0)->count(),
            "arrange" => Amenage::where("status", 0)->count(),
            "relocate" => Demenage::where("status", 0)->count(),
            "Job"      => Job::where("status", 0)->count()
        ];
       
        return $notify;
    }
}