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

    public function store(Request $request)
    {
        $product = new Product();
    
        $product->name_product = $request->input('name_product');
        $product->price_product = $request->input('price_product');
        $product->desc_product = $request->input('desc_product');
    
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
        
        $product = product::findOrFail($id);

        $product->name_product = $request->input('name_product');
        $product->price_product = $request->input('price_product');
        $product->desc_product = $request->input('desc_product');

        // Upload dan simpan gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('/images');
            $product->image = $imagePath;
        }

        $product->save();

        return response()->json([
            'status' => true,
            'message' => 'Product updated successfully',
        ], 200);
    }

    public function destroy($id) {
        $product = product::findOrFail($id);
        $product->delete();

        return response()->json([
            'status' => true,
            'message' => 'Product deleted successfully',
        ], 200);
    }


}
