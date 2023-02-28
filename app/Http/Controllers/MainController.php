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

        $names_upc = ["Laura Fernandez", "Marina Iniesta", "Carla Abascal", "Alejandro"];

        $names_proven = ["Jonatan Feliz", "Pau Martinez","Sonia Morales", "Anthony Reyes", "Ruyou Hu Ye"];

        $img_upc = ["img/laura.png","img/marina.jpg","img/carla.jpg","img/avatarvacio.png"];

        $img_proven = ["img/avatarvacio.png"];

        return view('team', compact('names_upc','names_proven','img_proven'));
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

    public function tournament(){
        return view('tournaments.index');
    }

    public function tournament_add(){
        return view('tournaments.create');
    }

    public function tournament_edit(){
        return view('tournaments.edit');
    }
}
