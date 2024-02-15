<?php

namespace App\Http\Controllers;

use App\Http\Resources\loginJsonResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ParentController extends Controller
{
    function login(Request $request)
    {
        $user = User::where('username', '=', $request->username)
            ->where('level', '=', 'santri')
            ->first();

        // return $user;

        
        if ($user) {
            if (!Hash::check($request->password, $user->password) || $user->level != 'santri') {
                return response()->json([
                    'status' => false,
                    "message" => 'Unauthorized'
                ], 401);
            }
            return response()->json([
                'status' => true,
                'message' => 'Login Success',
                'data_user' => new loginJsonResource($user),
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'User tidak dapat ditemukan',
            ]);
        }
    }
}
