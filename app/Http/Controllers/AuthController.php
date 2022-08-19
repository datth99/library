<?php

namespace App\Http\Controllers;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function goHome(AdminRequest $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        $remember = $request->remember;

        if (Auth::attempt($data, $remember)) {
            return redirect()->route('home');
        }

        return redirect('login')->with('message', 'E-mail hoặc mật khẩu đã nhập không đúng!');
    }

    public function logout(){

        Auth::logout();

        return redirect('login');
    }
}
