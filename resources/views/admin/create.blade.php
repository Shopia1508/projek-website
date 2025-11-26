<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<form action="{{ route('admin.menus.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <input type="text" name="category" placeholder="Category">
    <textarea name="description"></textarea>
    <input type="number" name="price" placeholder="Price">
    <input type="file" name="image">

    <button type="submit">Save</button>
</form>
