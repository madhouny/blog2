<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    function index(){
    return view('sign');
}


    public function SignUp(Request $request){
        $email = $request['email'];
        $name = $request['name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->password = $password;

        $user->save();

        return redirect()->back();
    }

    public function SignIn(){

    }
}
