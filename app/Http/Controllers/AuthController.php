<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $login = $request->only('email', 'password');
        $remember = $request->filled('remember');

        if (Auth::attempt($login, $remember)) {
            $user = Auth::user();
            $role_id = $user->role_id;
            if ($role_id ==  1) {
                return redirect('/admin/dashboard');
            } else if ($role_id == 2) {
                return redirect('/');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
