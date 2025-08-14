<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        "firstname",
        "lastname",
        "service",
        "tel",
        "avatar",
        "message",
        "users_id",
        "status",
        "qualification_competence"
    ];
}
