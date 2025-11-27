<form action="{{ route('admin.blog.store') }}" 
      method="POST" 
      enctype="multipart/form-data"
      class="create-form">

    @csrf
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <h2 class="create-form__title">Create Blog</h2>

 
    <label class="create-form__label">
        <span>Content</span>
        <textarea name="content" placeholder="Write your blog content..."></textarea>
    </label>

   
    <label class="create-form__label create-form__file">
        <span>Image</span>
        <input type="file" name="image">
    </label>

    <button type="submit" class="create-form__btn">Save</button>
</form>
