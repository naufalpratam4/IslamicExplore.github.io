<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

            if ($user->role_id ==  1) {
                return redirect('/admin/dashboard');
            } else if ($user->role_id == 2) {
                return redirect('/');
            }
        } else {
            return redirect()->back()->with('fail', 'Akun Anda Belum Terdaftar, silahkan registrasi terlebih dahulu');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    public function RegisterUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }
        $data['email'] = $request->input('email');
        $data['password'] = $request->input('password');
        $data['role_id'] = 2;
        User::create($data);
        if ($data) {
            return redirect('/login')->with('success', 'Berhasil Registrasi, Silahkan login');
        }
    }
}
