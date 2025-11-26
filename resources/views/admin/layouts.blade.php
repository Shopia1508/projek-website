<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  
</head>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<body>

    <div class="hamburger" id="hamburger">
        <i class="fa-solid fa-bars"></i>
    </div>
    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">
        <div class="logo">Coffeé.</div>
        <a href="{{ route('admin.index')}}" class="menu-item "><i class="fa-solid fa-house-chimney-user"></i> Home Admin</a>
        <a href="{{ route('admin.menus') }}" class="menu-item"><i class="fa-solid fa-utensils"></i> Menus</a>
        <a href="/admin/orders" class="menu-item"><i class="fa-regular fa-envelope"></i> Blog</a>
        <a href="/admin/users" class="menu-item"><i class="fa-solid fa-tags"></i> Category</a>
        <a href="/admin/settings" class="menu-item"><i class="fa-solid fa-gear"></i> Settings</a>
        <div class="menu-item logout" style="margin-top:60px;"><i>⏻</i> Logout</div>
    </div>

    <div class="main">
        @yield('content')
    </div>

    <script>
        const hamburger = document.getElementById('hamburger');
        const sidebar = document.getElementById('sidebar');

        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
    </script>
</body>
</html>

