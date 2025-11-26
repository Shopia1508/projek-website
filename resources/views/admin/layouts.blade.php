<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="logo">Coffeé.</div>
        <a href="{{ route('admin.index')}}" class="menu-item "><i class="fa-solid fa-house-chimney-user"></i> Home Admin</a>
        <a href="{{ route('admin.menus') }}" class="menu-item"><i class="fa-solid fa-utensils"></i> Menus</a>
        <a href="{{route('admin.blog.index')}}" class="menu-item"><i class="fa-regular fa-envelope"></i> Blog</a>
        <a href="/admin/us'aders" class="menu-item"><i class="fa-solid fa-tags"></i> Category</a>
        <a href="/admin/settings" class="menu-item"><i class="fa-solid fa-gear"></i> Settings</a>


        <div class="menu-item" style="margin-top:60px;"><i>⏻</i> Logout</div>
    </div>

    <div class="main">
        @yield('content')
    </div>
</body>
</html>

