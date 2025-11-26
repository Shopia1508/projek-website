@extends('admin.layouts')
@section('content')
<h1 class="tittle-daftar">Daftar Menu</h1>
<a href="{{ route('admin.menus.create') }}" class="btn-add">+ Tambah Menu</a>

@if(session('success'))
    <p class="alert-success">{{ session('success') }}</p>
@endif

<table class="menu-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($menus as $menu)
        <tr>
            <td>{{ $menu->name }}</td>
            <td>{{ $menu->category }}</td>
            <td>{{ $menu->description }}</td>
            <td>{{ $menu->price }}</td>
            <td>
                @if($menu->image)
                    <img src="{{ asset('public/' . $menu->image) }}" class="menu-image">
                @endif
            </td>
            <td>
                <a href="{{ route('admin.menus.edit', $menu->id) }}" class="btn-edit">Edit</a>
                <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
