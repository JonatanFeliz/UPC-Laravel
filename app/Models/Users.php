<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Create new user
    public function insertUser($name,$last_name,$email,$password){
        $user = new Users();
        $user->name = $name;
        $user->last_name = $last_name;
        $user->email = $email;
        $user->password = $password;

        $user->save();
    }


    // Get data for validate login
    public function getUser($email,$password){
        $result = true;

        $user = DB::table('users')
            ->select('email', 'password')
            ->where('email', $email)
            ->get();


        if($user[0]->password == $password){
            return $result = true;
        }

        return $result = false;
        // return $user[0]->password;
    }
}
