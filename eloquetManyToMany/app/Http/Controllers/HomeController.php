<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\role;

class HomeController extends Controller
{
    public function index()
    {
        $role = user::find(1)->roles;
        $user = roleusers::find(1)->roles;
        return $role;
    }
}
