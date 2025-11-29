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
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    if ($request->hasFile('image')) {
        // SIMPAN GAMBAR KE STORAGE
        $validated['image'] = $request->file('image')->store('menus', 'public');
    }

    Menus::create($validated);

    return redirect()->route('admin.menus.index');
}
}
