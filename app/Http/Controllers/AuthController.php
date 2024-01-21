<?php

namespace App\Http\Controllers;

use App\Http\Resources\userResource;
use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login(Request $request)
    {

        Session::flash('email', $request->email);
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
            return redirect('login')->withErrors('Username atau Password yang anda masukkan salah');
        }
    }

    function index()
    {
        return view('register.register');
    }

    function register(Request $request)
    {
        $datauser = new User();

        Session::flash('email', $request->email);
        Session::flash('name', $request->name);
        Session::flash('alamat', $request->alamat);
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
        $datauser->address = $request->alamat;
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
            return redirect('register-BurgaCorp')->withErrors('Pendaftaran gagal silahkan isi kembali');
        }
    }

    function home()
    {
        $user_id = Auth::id();
        $isToken = Token::where('user_id', $user_id)->pluck('token')->first();
        if (!$isToken) {
            return redirect('logout')->withErrors('Silahkan Login Lagi');
        } else {
            return view('home.home')->with('token', $isToken);
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    function view_login()
    {
        return view('login.login');
    }

    function api_direct()
    {
        return view('api.api_view');
    }

    function UpdateSantri(Request $request, $id)
    {
        // $request->validate([
        //     'uuid' => 'unique:users,uuid'
        // ], [
        //     'uuid.unique' => 'Kartu sudah terdaftar'
        // ]);

        $santri = User::findOrFail($id);
        if ($request->username != '') {
            $santri->username = $request->username;
        }
        $santri->uuid = $request->uuid;
        $santri->pin = $request->pin;

        $santri->save();

        return response()->json([
            'status' => true,
            'message' => 'success',
        ], 200)->header('Content-Type', 'application/json');
    }

    function CheckSantri()
    {
        $santri = User::Where('level', '=', 'santri')->get();
        if ($santri) {
            return response()->json([
                'status' => true,
                'message' => 'success',
                'data' => userResource::collection($santri),
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'user not found'
            ], 200);
        }
    }
}
