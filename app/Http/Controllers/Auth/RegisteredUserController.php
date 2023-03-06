<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = new User();

        $user->name      = $request->name;
        $user->last_name = $request->last_name;
        $user->email     = $request->email;
        $user->password  = Hash::make($request->password);

        $user->save();

        // Auth::login($user);

        session()->flash('status', 'Cuenta creada');

        return redirect()->route('login');
    }
}
