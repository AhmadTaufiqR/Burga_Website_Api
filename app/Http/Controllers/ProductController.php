<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = product::orderBy('id','asc')->get();
        return response()->json([
            'status' => true,
            'massage' => 'data ditemukan',
            'data' => $data
        ], 200);
    }

}
