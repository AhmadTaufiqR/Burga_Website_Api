<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetailTransactionResource;
use App\Models\Detail_transaction;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DetailTransactionController extends Controller
{
    public function index()
    {
        // $detail_transaction = Detail_transaction::orderBy('id', 'desc')->get();
        $detail_transaction = Detail_transaction::select('detail_transactions.*', 'products.name_product')
        ->join('products', 'detail_transactions.id_product', '=', 'products.id')->get();
        return response()->json([
            'status' => true,
            'massage' => 'Transaksi ditemukan',
            'list_detail_transaction' => DetailTransactionResource::collection($detail_transaction)
        ], 200);
    }

    public function store(Request $request)
    {
        $detail_transaction = new Detail_transaction();

        $id_transaction = Transaction::where('id_transaction', '=', $request->id_transaction)->pluck('id_transaction')->first();
        $id_product = Product::where('id', '=', $request->id_product)->pluck('id')->first();

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

    function show($id) {
        // $detail_transaction = Detail_transaction::where('id_transactions', '=', $id)->orderBy('id', 'desc')->get();
        // return response()->json([
        //     'status' => true,
        //     'massage' => 'Transaksi ditemukan',
        //     'list_detail_transaction' => $detail_transaction,
        // ], 200);
        $detail_transaction = Detail_transaction::select('detail_transactions.*', 'products.name_product')
        ->join('products', 'detail_transactions.id_product', '=', 'products.id')->where('id_transactions', '=', $id)->get();
        return response()->json([
            'status' => true,
            'massage' => 'Transaksi ditemukan',
            'list_detail_transaction' => DetailTransactionResource::collection($detail_transaction)
        ], 200);
    }

}
