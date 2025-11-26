<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<form class="edit-form" action="{{ route('admin.menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <h2 class="edit-form__title">Update Menu</h2>

    <label class="edit-form__label">
        <span>Name</span>
        <input type="text" name="name" value="{{ $menu->name }}">
    </label>

    <label class="edit-form__label">
        <span>Category</span>
        <input type="text" name="category" value="{{ $menu->category }}">
    </label>

    <label class="edit-form__label">
        <span>Description</span>
        <textarea name="description">{{ $menu->description }}</textarea>
    </label>

    <label class="edit-form__label">
        <span>Harga</span>
        <input type="number" name="price" value="{{ $menu->price }}" min="0" step="1000">
    </label>

    <label class="edit-form__label edit-form__file">
        <span>Gambar</span>
        <input id="imageInput" type="file" name="image" accept="image/*">
        <div id="preview" class="edit-form__preview">
            @if ($menu->image)
                <img src="{{ asset('images/' . $menu->image) }}" alt="current image">
            @endif
        </div>
    </label>

    <button class="edit-form__btn" type="submit">Update</button>
</form>


