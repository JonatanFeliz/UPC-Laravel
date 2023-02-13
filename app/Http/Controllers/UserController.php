<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Users;


class UserController extends Controller
{

    public function register(Request $request){
        $user = new Users();
        $name = $request->name;
        $last_name = $request->last_name;
        $email = $request->email;
        $password = $request->password;

        $result = $user->insertUser($name, $last_name, $email, $password);

        return redirect(route('login'));
    }




    public function validateLogin(Request $request){

        $user = new Users();

        $email = $request->user;

        $password = $request->password;

        $result = $user->getUser($email,$password);

        return view('/userMessage', compact('result'));
    }
}
