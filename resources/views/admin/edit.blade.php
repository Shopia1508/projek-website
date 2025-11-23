<form action="{{ route('admin.menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" value="{{ $menu->name }}">
    <input type="text" name="category" value="{{ $menu->category }}">
    <textarea name="description">{{ $menu->description }}</textarea>
    <input type="number" name="price" value="{{ $menu->price }}">
    <input type="file" name="image">

    <button type="submit">Update</button>
</form>
