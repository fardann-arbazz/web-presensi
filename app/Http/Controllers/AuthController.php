<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function create(Request $request) {
        $request->validate([
          'username' => 'required',
          'password' => 'required'
        ]);

        User::create([
           'username' => $request->username,
           'password' => Hash::make($request->password),
           'role' => 'user'
        ]);

        $credentials = $request->only('username', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect('/');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            if (Auth::user()->role == 'admin') {
                return redirect('dashboard/admin');
            }
            if (Auth::user()->role == 'user') {
                return redirect('/');
            }
        } else {
            return redirect('')->withErrors('Username Atau Password Tidak Sesuai')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}