<!DOCTYPE html>
<html>

<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>

    <section class="login-section"> 
    <div class="login-wrapper">
        <form action="/admin/index" method="POST">
            <h1>Login Admin</h1>
            @csrf
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class="bi bi-person-fill"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class="bi bi-key"></i>
            </div>

            <button type="submit" class="btn">Login</button>
            @if ($errors->any())
            <p style="color:rgb(255, 250, 233)">{{ $errors->first() }}</p>
        @endif


        </form>
    </div>
</section>
</body>

</html>
