<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        //kiểm tra dữ liệu
        // dd($request->all());

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Vui lòng nhập email.',
            'password' => 'Vui lòng nhập password.'
        ]);
    }
}
