<?php

namespace App\Http\Controllers;

use App\Http\Resources\loginCollection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    function login_user(Request $request){
        $user = User::where('email', '=', $request->email)
        ->orWhere('name', '=', $request->name)
        ->where('level', '=', 'user')
        ->first();
        if (!$user|| !Hash::check($request->password, $user->password) || $user->level != 'user'){
            return response()->json([
                'status' => false,
                "message" => 'Unauthorized'
            ], 401);
        }
        return response()->json([
            'status' => true,
            'message' =>'success',
            'data_user' => $user,
        ], 200);
    }

    function login_kasir(Request $request){
        $user = User::where('email', '=', $request->email)
                    ->orWhere('name', '=', $request->name)
                    ->where('level', '=', 'kasir')
                    ->first();

        if (!$user|| !Hash::check($request->password, $user->password)|| $user->level != 'kasir'){
            return response()->json([
                'status' => false,
                "message" => 'Unauthorized'
            ], 401);
        }
        return response()->json([
            'status' => true,
            'message' =>'success',
            'data_kasir' => $user,
        ], 200);
    }

    function register_kasir(Request $request){
        $kasir = new User();

        $kasir->name = $request->name;
        $kasir->email = $request->email;
        $kasir->password = Hash::make($request->password);
        $kasir->level = 'kasir';

        $kasir->save();
        return response()->json([
            'status' => true,
            'message' =>'success',
        ], 200);
    }
    function register_user(Request $request){
        $kasir = new User();

        $kasir->name = $request->name;
        $kasir->email = $request->email;
        $kasir->password = Hash::make($request->password);
        $kasir->level = 'user';

        $kasir->save();
        return response()->json([
            'status' => true,
            'message' =>'success',
        ], 200);
    }
}
