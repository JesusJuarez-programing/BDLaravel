<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\video;

class HomeControler extends Controller
{
    pubic function index()
    {
        $post = post::first();
        return $post->tags;
        // return view('welcome');
    }
}
