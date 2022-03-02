<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function postRegister(PostRequest $request)
    {

        //kiểm tra dữ liệu
        // dd($request->all());

        //luu vao co sở dữ liệu
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        //thong báo thành công 
        session()->flash('thong_bao', 'Lưu thành công');
        //chuyển hướng đến sang đăng nhập 
        return redirect()->route('login');
        // dd($validatedData);
    }
}
