<form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <textarea name="description">{{ $blog->description }}</textarea>
    <input type="file" name="image">

    <button type="submit">Update</button>
</form>
