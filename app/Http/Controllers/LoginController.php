<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function login(){
        return view('Pengguna.login');
    }

    public function postlogin (Request $request){

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/home');
        }
        else{
        Alert::warning('Error','Username atau Password yang Anda Masukkan Salah');
        return redirect ('/login');

}
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect ('/login');   
    } 
}