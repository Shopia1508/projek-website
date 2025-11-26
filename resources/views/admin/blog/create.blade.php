<form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <textarea name="content" placeholder="content"></textarea>
    <input type="file" name="image">

    <button type="submit">Save</button>
</form>
