<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.regist');
    }

    public function store()
    {
        $user = User::create(request(['name', 'email', 'password']));
        return redirect()->to('/auth/login');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function login_store(Request $request)
    {
        $credentials = request(["email", "password"]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            "message" => "이메일 혹은 비밀번호가 일치하지 않습니다."
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/auth/login');
    }
}
