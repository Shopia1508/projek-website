<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menus;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Menus::all());
    }

    public function filterByCategory($category)
    {
        return response()->json(
            Menus::where('category', $category)->get()
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'image' => 'nullable|string'
        ]);

        $product = Menus::create($validated);

        return response()->json([
            'message' => 'Produk berhasil ditambahkan!',
            'data' => $product
        ], 201);
    }
}
