<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<form  class="create-form" action="{{ route('admin.menus.store') }}" method="POST" enctype="multipart/form-data">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @csrf

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<form action="{{ route('admin.menus.store') }}" method="POST" enctype="multipart/form-data">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @csrf
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
          
                <img src="{{ asset('images/') }}" alt="current image">
        </div>
    </label>

    <button class="edit-form__btn" type="submit">Tambah</button>
</form>



