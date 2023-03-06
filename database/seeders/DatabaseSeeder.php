<?php

namespace Database\Seeders;
use App\Models\Tournament;
use App\Models\User;
use App\Models\UserTournament;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Tournament::factory(10)->create();

        User::create([
            'name'      => 'Jonatan',
            'last_name' => 'Feliz',
            'email'     => 'jonatanfelizf3@gmail.com',
            'password'  => bcrypt('jonatan01'),
        ])->assignRole('admin');

        User::create([
            'name'      => 'Pau',
            'last_name' => 'Martinez',
            'email'     => 'pmartinez2@gmail.com',
            'password'  => bcrypt('jonatan01'),
        ])->assignRole('admin');
        
        User::factory(10)->create()->each(function ($user) {
            $user->assignRole('student');
        });

        UserTournament::factory(10)->create();
    }
}
