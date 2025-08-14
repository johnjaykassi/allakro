<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Death extends Model
{
    use HasFactory;

    protected $fillable = [
        "firstname",
        "lastname",
        "function",
        "sexe",
        "date_born",
        "date_death",
        "mode",
        "motif",
        "parant_name",
        "city_live",
        "users_id",
        "status"
    ];
}
