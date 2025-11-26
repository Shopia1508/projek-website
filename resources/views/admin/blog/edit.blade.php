<form action="{{ route('admin.blog.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <textarea name="description">{{ $menu->description }}</textarea>
    <input type="file" name="image">

    <button type="submit">Update</button>
</form>
