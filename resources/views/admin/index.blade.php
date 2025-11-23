<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: #FAF6F2;
            display: flex;
            height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 240px;
            background: linear-gradient(180deg, #F2E8DC, #F7EFE6);
            padding: 30px 20px;
            box-sizing: border-box;
        }

        .sidebar .logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 10px;
            cursor: pointer;
            margin-bottom: 12px;
            transition: 0.2s;
        }

        .menu-item:hover,
        .menu-item.active {
            background: #ffffff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .menu-item i {
            margin-right: 12px;
        }

        /* MAIN CONTENT */
        .main {
            flex: 1;
            padding: 40px;
        }

        .header {
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        /* TOP CARDS */
        .cards {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .card {
            background: #fff;
            padding: 20px;
            border-radius: 16px;
            flex: 1;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .card .num {
            font-size: 28px;
            font-weight: bold;
        }

        .card .label {
            color: #777;
        }

        /* FLEX CONTENT SECTION */
        .content-grid {
            display: flex;
            gap: 20px;
        }

        .recent-orders,
        .sales {
            background: #fff;
            padding: 22px;
            border-radius: 16px;
            flex: 1;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .recent-orders table {
            width: 100%;
            border-collapse: collapse;
        }

        .recent-orders table th,
        .recent-orders table td {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
            text-align: left;
            font-size: 14px;
        }

        /* BESTSELLER */
        .bestseller {
            margin-top: 25px;
            background: #fff;
            padding: 22px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .menu-list {
            display: flex;
            gap: 20px;
            margin-top: 15px;
        }

        .menu-card {
            width: 160px;
            border-radius: 16px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .menu-card img {
            width: 100%;
            height: 120px;
            object-fit: cover;
        }

        .menu-card .title {
            font-weight: 600;
            padding: 10px;
        }

        .menu-card .price {
            padding: 0 10px 10px;
            color: #666;
        }
    </style>

</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="logo">☕ Cafe Admin</div>
        <a href="{{ route('admin.index')}}" class="menu-item active"><i></i> Home Admin</a>
        <a href="{{ route('admin.menus') }}" class="menu-item"><i></i> Menus</a>
        <a href="/admin/orders" class="menu-item"><i></i> Blog</a>
        <a href="/admin/users" class="menu-item"><i></i>Category</a>
        <a href="/admin/settings" class="menu-item"><i></i> Settings</a>


        <div class="menu-item" style="margin-top:60px;"><i>⏻</i> Logout</div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main">

        <div class="header">Welcome Back, Admin! </div>

        <!-- TOP CARDS -->
        <div class="cards">
            <div class="card">
                <div class="num">24</div>
                <div class="label">Total Menu</div>
            </div>
            <div class="card">
                <div class="num">16</div>
                <div class="label">Total Orders Today</div>
            </div>
            <div class="card">
                <div class="num">35</div>
                <div class="label">Total Customers</div>
            </div>
            <div class="card">
                <div class="num">3</div>
                <div class="label">Orders Pending</div>
            </div>
        </div>

        <!-- CONTENT GRID -->
        <div class="content-grid">


          
        </div>

        <!-- BESTSELLER SECTION -->
        <div class="bestseller">
            <h3>Bestseller Menus</h3>

            <div class="menu-list">
                <div class="menu-card">
                    <img src="https://source.unsplash.com/300x200/?coffee" />
                    <div class="title">Caramel Latte</div>
                    <div class="price">Rp 23.000</div>
                </div>

                <div class="menu-card">
                    <img src="https://source.unsplash.com/300x200/?cake" />
                    <div class="title">Strawberry Cheesecake</div>
                    <div class="price">Rp 42.000</div>
                </div>

                <div class="menu-card">
                    <img src="https://source.unsplash.com/300x200/?drink" />
                    <div class="title">Lemon Tea</div>
                    <div class="price">Rp 13.000</div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>