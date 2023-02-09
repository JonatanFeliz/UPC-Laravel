<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function howtoplay(){
        return view('rules');
    }

    public function team(){
        return view('team');
    }

    public function contact(){
        return view('contact');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
}
