<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $posts = \App\Post::where('user_id','>' ,7)->get();
        return view('welcome', ['posts'=> $posts]);
    }
}
