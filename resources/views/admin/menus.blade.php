<h1>Daftar Menu</h1>
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

<style>
    h1 { color: #333; margin-bottom: 20px; }
    .btn-add { background: #4CAF50; color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px; }
    .alert-success { background: #DFF2BF; padding: 10px; border-radius: 4px; margin-bottom: 10px; }
    .menu-table { width: 100%; border-collapse: collapse; margin-top: 10px; }
    .menu-table th, .menu-table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    .menu-table th { background-color: #f4f4f4; }
    .menu-image { width: 60px; height: auto; border-radius: 4px; }
    .btn-edit { background: #2196F3; color: white; padding: 4px 8px; text-decoration: none; border-radius: 4px; }
    .btn-delete { background: #f44336; color: white; border: none; padding: 4px 8px; border-radius: 4px; cursor: pointer; }
</style>
