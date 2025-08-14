<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenage extends Model
{
    use HasFactory;

    protected $fillable = [
        "firstname",
        "lastname",
        "function",
        "provenance",
        "date_born",
        "mode_heb",
        "sexe",
        "parent_name",
        "city_live",
        "users_id",
        "status"
    ];
}
