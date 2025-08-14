<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demenage extends Model
{
    use HasFactory;

    protected $fillable = [
        "firstname",
        "lastname",
        "function",
        "date_born",
        "sexe",
        "city_live",
        "users_id",
        "status",
        "nou_destination"
    ];
}
