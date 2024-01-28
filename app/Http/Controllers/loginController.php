<?php

namespace App\Http\Controllers;

use App\Http\Resources\loginCollection;
use App\Http\Resources\loginJsonResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    function login_user(Request $request)
    {
        $user = User::where('uuid', '=', $request->uuid)
            ->where('pin', '=', $request->pin)
            ->where('level', '=', 'santri')
            ->first();
        if ($user) {
            return response()->json([
                'status' => true,
                'message' => 'success',
                'data_user' => new loginJsonResource($user),
            ], 200)->header('Content-Type', 'application/json');
        } else {
            return response()->json([
                'status' => false,
                'message' => 'User tidak dapat ditemukan',
            ], 401)->header('Content-Type', 'application/json');
        }
    }

    function login_kasir(Request $request)
    {
        $user = User::where('email', '=', $request->email)
            ->orWhere('username', '=', $request->email)
            ->where('level', '=', 'kasir')
            ->first();

        if (!$user || !Hash::check($request->password, $user->password) || $user->level != 'kasir') {
            return response()->json([
                'status' => false,
                "message" => 'Unauthorized'
            ], 401);
        }
        return response()->json([
            'status' => true,
            'message' => 'success',
            'data_kasir' => new loginJsonResource($user),
        ], 200)->header('Content-Type', 'application/json');
    }

    function login_admin(Request $request)
    {
        $user = User::where('email', '=', $request->email)
            ->orWhere('name', '=', $request->name)
            ->where('level', '=', 'admin')
            ->first();

        if (!$user || !Hash::check($request->password, $user->password) || $user->level != 'admin') {
            return response()->json([
                'status' => false,
                "message" => 'Unauthorized'
            ], 401);
        }
        return response()->json([
            'status' => true,
            'message' => 'success',
            'data_kasir' => new loginJsonResource($user),
        ], 200)->header('Content-Type', 'application/json');
    }

    function register_admin(Request $request)
    {
        $kasir = new User();

        $kasir->name = $request->name;
        $kasir->email = $request->email;
        $kasir->password = Hash::make($request->password);
        $kasir->level = 'kasir';

        $kasir->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
        ], 200);
    }
    function register_kasir(Request $request)
    {
        $kasir = new User();

        $kasir->name = $request->name;
        $kasir->email = $request->email;
        $kasir->password = Hash::make($request->password);
        $kasir->level = 'kasir';

        $kasir->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
        ], 200);
    }
    function register_user(Request $request)
    {
        $kasir = new User();

        $kasir->name = $request->name;
        $kasir->email = $request->email;
        $kasir->password = Hash::make($request->password);
        $kasir->level = 'santri';

        $kasir->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
        ], 200);
    }
}
