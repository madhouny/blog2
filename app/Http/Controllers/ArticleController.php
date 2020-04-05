<?php

namespace App\Http\Controllers;

use App\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $posts = \App\Post::all();
        return view('article', ['posts'=> $posts]);

    }

//    public function DeleteArticle($article_id){
//        $articles = Commentaire::where('id', $article_id)->first();
//        if(Auth::author() != $articles->author){
//            return redirect()->back();
//        }
//        $articles->delete();
//        return redirect()->back()->with(['message'=>'Successfully deleted']);
//
//    }

}
