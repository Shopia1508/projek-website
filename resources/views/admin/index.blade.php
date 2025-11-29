@extends('admin.layouts')

@section('content')
    <div class="main">

        <div class="header">Welcome Back, {{ Auth::guard('admin')->user()->name }} </div>

        <div class="top-section">

            <div class="welcome-box">
                <p>Welcome Back</p>
                <h2>FANATICOFFE</h2>

                <p>Go Back The Course!!</p>
            </div>

            <div class="calendar-box">
                <input id="calendar" type="text">
            </div>

        </div>

    </div>


    <script>
        flatpickr("#calendar", {
            inline: true,
            dateFormat: "d-m-Y"
        });
    </script>
@endsection
