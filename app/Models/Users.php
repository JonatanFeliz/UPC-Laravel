<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;

    public function insertUser($name,$lastName,$email,$password){
        DB::table('users')->insert([
            'name'      => $name,
            'last_name' => $lastName,
            'email'     => $email,
            'password'  => $password,
            "rol_id"    => 2
        ]);
    }


    public function getUser($email,$password){
        $user = DB::table('users')->get();

        

        // if($user->password == $password && $user->email == $email){
        //     return true;
        // }

        // return false;
        return $user;
    }
}
