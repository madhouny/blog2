<?php

namespace App\Http\Controllers;

use App\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{

    public function show($post_name)
    {
        $comments = Commentaire::orderBy('created_at', 'desc')->get();
        $articles = \App\Post::where('post_name', $post_name)->first();

        return view('post_article', array(
            'article' => $articles, 'comments'=>$comments
        ));

    }


    public function CreateComment(Request $request){
        //validation
            $this->validate($request, [
            'body'=>'required|max:1000'
            ]);
        //add a comment
        $commentaire = new Commentaire();
        $commentaire->body = $request['body'];
        $message = 'There was an error';

        // set up the relation between user and comment
       if( $request->user()->comments()->save($commentaire)){
           $message='Comment Successfully Created !';
       }

        return redirect()->back()->with(['message'=>$message]); // pour afficher le message
    }

    public function getDelete($comment_id){
            $comments = Commentaire::where('id', $comment_id)->first();
            if(Auth::user() != $comments->user){
                return redirect()->back();
            }
            $comments->delete();
            return redirect()->back()->with(['message'=>'Successfully deleted']);

    }
}
