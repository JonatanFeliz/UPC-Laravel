<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tournament_date',
    ];

    protected $table = 'tournaments';


    public function users(){
        return $this->belongsToMany(User::class);
    }
}
