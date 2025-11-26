<form action="{{ route('admin.menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <textarea name="content">{{ $menu->content }}</textarea>
    <input type="file" name="image">

    <button type="submit">Update</button>
</form>
