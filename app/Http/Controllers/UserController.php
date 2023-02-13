<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Users;


class UserController extends Controller
{

    // public function show(){
    //     return view('auth.register');
    // }

    public function register(RegisterRequest $request){
        // $user = User::create($request->validated());
        return redirect()->route('login');
    } 


    public function addUser(Request $request){

        $name = $request->input('name');
        $lastName = $request->input('last_name');
        $email = $request->input('email');
        $password = $request->input('password');

        // $user = User::insertUser($name, $lastname, $email, $password);
        
    }


    public function validateLogin(Request $request){
        // $post = new Post;
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->save();

        $user = new Users();

        $email = $request->user;

        $password = $request->password;


        $result = $user->getUser($email,$password);

        // $result = $user->getUser($email,$password);

        //  "Hola $request->user and $request->password";

        return view('/userMessage', compact('result'));
    }
}
