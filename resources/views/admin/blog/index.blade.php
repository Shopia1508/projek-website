@extends('admin.layouts')
@section('content')

<h1 class="tittle-daftar">Daftar Blog</h1>

<a href="{{ route('admin.blog.create') }}" class="btn-add">+ Tambah Blog</a>

@if(session('success'))
    <p class="alert-success">{{ session('success') }}</p>
@endif

<table class="menu-table">
    <thead>
        <tr>
            <th>Image</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <td>
                @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" 
                         class="blog-image"
                         style="width:120px; border-radius:8px;">
                @endif
            </td>

            <td>{{ $blog->content }}</td>

           <td>
            <div class="btn-action">
                <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn-edit">Edit</a>

                <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">Hapus</button>
                </form>
            </div>
        </td>


        </tr>
        @endforeach
    </tbody>
</table>

@endsection
