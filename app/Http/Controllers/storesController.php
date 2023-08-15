<?php

namespace App\Http\Controllers;

use App\Http\Resources\storesResource;
use App\Models\store;
use Illuminate\Http\Request;

class storesController extends Controller
{
    function index() {
        $stores = store::orderBy('id', 'desc')->get();

        if ($stores) {
            return response()->json([
                'status' => true,
                'message' => 'data ditemukan',
                'data_store' => storesResource::collection($stores)
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'data tidak ditemukan',
            ], 400);
        }
    }

    function store(Request $request) {
        $stores = new store();

        $stores->id_pondok = $request->id_pondok;
        $stores->name = $request->name;
        $stores->owner = $request->owner;
        $stores->address = $request->address;
        $stores->image = $request->image;
        $stores->balance = $request->balance;

        $stores->save();
        return response()->json([
            'status' => true,
            'message' => 'data berhasil ditambah',
        ], 200);

    }
    
}
