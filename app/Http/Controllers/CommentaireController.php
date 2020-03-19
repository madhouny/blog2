<?php

namespace App\Http\Controllers;

use App\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
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
}
