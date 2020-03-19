<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $posts = \App\Post::all();
        return view('article', ['posts'=> $posts]);

    }

}
