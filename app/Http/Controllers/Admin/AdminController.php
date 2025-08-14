<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::where("role", "admin")->get();
        
        return view("admin.admin", compact('admins'));
    }
}
