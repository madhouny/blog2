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
        // validating data before send them to db
        $this->validate($request, [
            'email'=>'required|email|unique:users',
            'name'=>'required|max:120',
            'password'=>'required|min:4'
        ]);
        $email = $request['email'];
        $name = $request['name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->password = $password;

        $user->save();

        Auth::login($user);

        return redirect()->route('articles');
    }

    public function SignIn(Request $request){
        $this->validate($request, [
            'email'=>'required',
            'password'=>'required'
        ]);

       if( Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
           return redirect()->route('articles');
       }

       return redirect()->back();
    }
}
