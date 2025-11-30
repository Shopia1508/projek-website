<form action="{{ route('admin.blog.update', $blog->id) }}" 
      method="POST" enctype="multipart/form-data"
      class="edit-form">

    @csrf
    @method('PUT')

    <h2 class="edit-form__title">Edit Blog</h2>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <label class="edit-form__label">
        <span>Content</span>
        <textarea name="content">{{ $blog->content }}</textarea>
    </label>

    <label class="edit-form__label edit-form__file">
        <span>Image</span>
        <input type="file" name="image">
    </label>

    <button type="submit" class="edit-form__btn">Update</button>
</form>
