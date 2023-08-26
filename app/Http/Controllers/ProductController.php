<?php

namespace App\Http\Controllers;

use App\Http\Resources\productResource;
use App\Models\Product;
use App\Models\store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::orderBy('id','desc')->get();
        return response()->json([
            'status' => true,
            'massage' => 'data ditemukan',
            'list_product' => productResource::collection($data)
        ], 200);
    }

    public function store(Request $request)
    {
        if(!$request->input('id_store') || !$request->input('code_barcode') || !$request->input('name_product') || !$request->input('price_product') || !$request->input('desc_product') || !$request->input('stok')) {
            return response()->json([
                'status' => false,
                'massage' => 'Silahkan periksa ulang'
            ]);
        }

        $product = new Product();
        
        $id_store = store::where('id', '=', $request->input('id_store'))->pluck('id')->first();

        $product->id_store = $id_store;
        $product->code_barcode = $request->input('code_barcode');
        $product->name_product = $request->input('name_product');
        $product->price_product = $request->input('price_product');
        $product->desc_product = $request->input('desc_product');
        $product->stok = $request->input('stok');
    
        // Upload dan simpan gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('/images');
            $product->image = $imagePath;
        }
    
        $product->save();
    
        return response()->json([
            'status' => true,
            'message' => 'Product created successfully',
        ], 200);
    }

    public function update(Request $request, $id) {
        
        $product = Product::findOrFail($id);

        if($request->input('name_product')) {
            $product->name_product = $request->input('name_product');
        }
        if($request->input('price_product')) {
            $product->price_product = $request->input('price_product');
        }
        if($request->input('desc_product')) {
            $product->desc_product = $request->input('desc_product');
        }
        if($request->input('stok')) {
            $product->stok = $request->input('stok');
        }

        // Upload dan simpan gambar
        if ($request->hasFile('image')) {
            if (Storage::exists($product->image)) {
                Storage::delete([$product->image]);
            }
            $imagePath = $request->file('image')->store('images');
            $product->image = $imagePath;
        }

        $product->save();

        $data_find = Product::findOrFail($id);

        return response()->json([
            'status' => true,
            'message' => 'Product updated successfully',
            'data_product' => $data_find
        ], 200);

    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
            if (Storage::exists($product->image)) {
                Storage::delete([$product->image]);
            }
        $product->delete();

        return response()->json([
            'status' => true,
            'message' => 'Product deleted successfully',
        ], 200);
    }

    function show($id) {
        $product = Product::where('id_store', '=', $id)->orderBy('id', 'desc')->get();

        return response()->json([
            'status' => true,
            'message' => 'data berhasil ditemukan',
            'list_product' => productResource::collection($product)
        ]);
    }


}
