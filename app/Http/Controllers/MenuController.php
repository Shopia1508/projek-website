<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menus;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menus::all();
        return view('admin.menus', compact('menus'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = $request->all();
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('menus', 'public');
        }

        Menus::create($data);

        return redirect()->route('admin.menus')->with('success', 'Menu berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $menu = Menus::findOrFail($id);
        return view('admin.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menus::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = $request->all();
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('menus', 'public');
        }

        $menu->update($data);

        return redirect()->route('admin.menus')->with('success', 'Menu berhasil diupdate!');
    }

    public function destroy($id)
    {
        $menu = Menus::findOrFail($id);
        $menu->delete();
        return redirect()->route('admin.menus')->with('success', 'Menu berhasil dihapus!');
    }
}
