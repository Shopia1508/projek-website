<form class="create-form" action="{{ route('admin.menus.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <label class="create-form__label">
        <span>Name</span>
        <input type="text" name="name">
    </label>

    <label class="create-form__label">
        <span>Category</span>
        <input type="text" name="category">
    </label>

    <label class="create-form__label">
        <span>Description</span>
        <textarea name="description"></textarea>
    </label>

    <label class="create-form__label">
        <span>Harga</span>
        <input type="number" name="price">
    </label>

    <label class="create-form__label create-form__file">
        <span>Gambar</span>
        <input id="imageInput" type="file" name="image">

        <div id="preview" class="edit-form__preview">
            <img id="previewImg" src="" alt="" style="display:none; max-width: 200px;">
        </div>
    </label>

    <button class="edit-form__btn" type="submit">Tambah</button>
</form>

<script>
    document.getElementById('imageInput').onchange = evt => {
        const [file] = evt.target.files
        if (file) {
            const img = document.getElementById('previewImg');
            img.src = URL.createObjectURL(file);
            img.style.display = 'block';
        }
    }
</script>
