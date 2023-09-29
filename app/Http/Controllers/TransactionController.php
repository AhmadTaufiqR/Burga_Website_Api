<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResource;
use App\Models\Detail_transaction;
use App\Models\Product;
use App\Models\store;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    function index() {
        $transaction = DB::table('transactions')
        ->leftjoin('users AS A', 'A.id', '=', 'transactions.id_user')
        ->leftjoin('users AS B', 'B.id', '=', 'transactions.id_kasir')
        ->select('transactions.*','A.name as name_user','B.name as name_kasir')
        ->get();

        return response()->json([
            'status' => true,
            'massage' => 'Transaksi ditemukan',
            'list_transaction' => TransactionResource::collection($transaction),
        ], 200);
    }

    public function store(Request $request)
    {
        if(!$request->date||!$request->quantity||!$request->total|| !$request->id_user || !$request->id_kasir ||!$request->id_store ||!$request->id_transaction){
            return response()->json([
                'status' => false,
                'massage' => 'Silahkan periksa kembali'
            ], 401);
        }

        $transacation = new Transaction();
        $id_user = User::where('id', '=', $request->id_user)
        ->where('level', '=', 'user')
        ->pluck('id')->first();
        $id_kasir = User::where('id', '=', $request->id_kasir)
        ->where('level', '=', 'kasir')
        ->pluck('id')->first();
        $id_store = store::where('id', '=', $request->id_store)
        ->pluck('id')->first();

        $transacation->id_user = $id_user;
        $transacation->id_kasir = $id_kasir;
        $transacation->id_store = $id_store;
        $transacation->id_transaction = $request->input('id_transaction');
        $transacation->date = $request->input('date');
        $transacation->quantity = $request->input('quantity');
        $transacation->total = $request->input('total');
        $transacation->save();
        
        return response()->json([
            'status' => true,
            'massage' => 'berhasil melakukan transaksi',
        ], 200);
        
    }

    function show($id) {
        // $transaksi = Transaction::where('id_store', '=', $id)->orderBy('id_transaction', 'desc')->get();
        $transaksi = DB::table('transactions')
        ->leftjoin('users AS A', 'A.id', '=', 'transactions.id_user')
        ->leftjoin('users AS B', 'B.id', '=', 'transactions.id_kasir')
        ->select('transactions.*','A.name as name_user','B.name as name_kasir')
        ->where('transactions.id_store', '=', $id)
        ->orderBy('transactions.id_transaction', 'desc')
        ->get();
        
        return response()->json([
            'status' => true,
            'message' => 'data berhasil ditemukan',
            'list_transaksi' => TransactionResource::collection($transaksi)
        ]);
    }

}
