<?php

namespace App\Http\Controllers;

use App\Models\Detail_transaction;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DetailTransactionController extends Controller
{
    public function index()
    {
        $detail_transaction = Detail_transaction::orderBy('id', 'desc')->get();
        return response()->json([
            'status' => true,
            'massage' => 'Transaksi ditemukan',
            'list_detail_transaction' => $detail_transaction,
        ], 200);
    }

    public function store(Request $request)
    {
        $detail_transaction = new Detail_transaction();

        $id_transaction = Transaction::where('id', '=', $request->id_transaction)->pluck('id')->first();
        $id_product = Transaction::where('id', '=', $request->id_product)->pluck('id')->first();

        $detail_transaction->id_transactions = $id_transaction;
        $detail_transaction->id_product = $id_product;
        $detail_transaction->quantity = $request->input('quantity');
        $detail_transaction->unit_price = $request->input('unit_price');
        $detail_transaction->subtotal = $request->input('subtotal');
        $detail_transaction->save();

        return response()->json([
            'status' => true,
            'massage' => 'berhasil melakukan transaksi',
        ], 200);

    }

}
