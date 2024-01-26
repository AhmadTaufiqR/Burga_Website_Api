<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionStoreResource;
use App\Models\transaction_store;
use Illuminate\Http\Request;

class TransactionStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaction_store  $transaction_store
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = transaction_store::where('stores_id', '=', $id)->orderBy('id', 'desc')->get();
        if ($transaction) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data_transaction' => TransactionStoreResource::collection($transaction)
            ],200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'data tidak ditemukan'
            ],400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaction_store  $transaction_store
     * @return \Illuminate\Http\Response
     */
    public function edit(transaction_store $transaction_store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaction_store  $transaction_store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaction_store $transaction_store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction_store  $transaction_store
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction_store $transaction_store)
    {
        //
    }
}
