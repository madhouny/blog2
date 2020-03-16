<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function getDashbord(){
        return view('welcome');
    }

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

        Auth::login($user);

        return redirect()->route('home');
    }

    public function SignIn(Request $request){
       if( Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
           return redirect()->route('home');
       }

       return redirect()->back();
    }
}
