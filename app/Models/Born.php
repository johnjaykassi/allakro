<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Born extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "firstname",
        "lastname",
        "sexe",
        "date_born",
        "dad_name",
        "mother_name",
        "city_live",
        "users_id",
        "status"
    ];
}
