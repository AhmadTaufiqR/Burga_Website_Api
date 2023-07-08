<?php

namespace App\Http\Controllers;

use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $loggin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($loggin)) {
            return redirect('home')->with('success', 'Anda Berhasil Login');
        } else {
            return redirect('login');
        }
    }

    function index(){
        return view('register.register');
    }

    function register(Request $request) {
        $datauser = new User();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);
        
        $datauser->name = $request->name;
        $datauser->email = $request->email;
        $datauser->password = Hash::make($request->password);
        $datauser->level = 'developer';
        $datauser->save();
        
        $loggin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($loggin)) {
            $email = $request->email;
            $isUser = User::where('email', $email)->pluck('id')->first();
            if ($isUser) {
                $isToken = new Token();
                $token = $datauser->createToken('developer')->plainTextToken;

                $isToken->user_id = $isUser;
                $isToken->token = $token;
                $isToken->save();

            return redirect('home')->with('success', 'Anda Berhasil Mendaftar');
            }
        } else {
            return 'gagal';
        }
    }

    function home(){
        $user_id = Auth::id();
        $isToken = Token::where('user_id', $user_id)->pluck('token')->first();
        if (!$isToken) {
            return redirect('logout')->withErrors('Silahkan Login Lagi');
        } else {
            return view('home.home')->with('token', $isToken);
        }
    }

    function logout() {
        Auth::logout();
        return redirect('login');
    }

    function view_login() {
        return view('login.login');
    }

}
