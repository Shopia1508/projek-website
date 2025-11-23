<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;                                                                                                                    

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all());
    }

    public function filterByCategory($category)
    {
        $products = Product::where('category', $category)->get();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|integer',
            'image' => 'nullable|string'
        ]);

        $product = Product::create($validated);

        return response()->json([
            'message' => 'Produk berhasil ditambahkan!',
            'data' => $product
        ], 201);
    }
}
