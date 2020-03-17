<?php

namespace App\Http\Controllers;

use App\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function CreateComment(Request $request){
        //validation

        //add a comment
        $commentaire = new Commentaire();
        $commentaire->body = $request['body'];

        // set up the relation between user and comment
        $request->user()->comments()->save($commentaire);

        return redirect()->back();
    }
}
