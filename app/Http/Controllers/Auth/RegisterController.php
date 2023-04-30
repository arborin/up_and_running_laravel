<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
        ]);
        // dd($request->email);

        // store user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // sign the user in
        auth()->attempt($request->only('email', 'password'));

        // redirect
        return redirect()->route('dashboard');
    }
}
