<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
//    public function index()
//    {
//        return view('article');
//    }

    public function show($post_name)
    {
        $articles = \App\Post::where('post_name', $post_name)->first();

        return view('article', array(
            'article' => $articles
        ));

    }
}
