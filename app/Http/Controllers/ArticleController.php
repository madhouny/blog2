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

    public function show($post_name)
    {
        $articles = \App\Post::where('post_name', $post_name)->first();

        return view('post_article', array(
            'article' => $articles
        ));

    }
}
