@extends('layout')

@section('content')
    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-left">
                <h1>
                    Every cup holds a <span>little story</span><br>
                    and a <span>little peace</span>
                </h1>

                <p>Setiap cangkir disajikan dengan penuh perhatian
                    untuk memberikan rasa nyaman dan berkualitas.
                </p>

                <a href="{{ route('products') }}" class="btn-order2">Lihat Selengkapnya</a>
            </div>

            <div class="hero-right">
                <div class="circle-bg"></div>
                <img src="{{ asset('images/coffe.png') }}" class="hero-img" alt="Coffee">
            </div>
        </div>
    </section>

    <section class="content-section">
    <div class="content-container">
        <div class="content-left">
            <img src="{{ asset('images/coffeshop.jpg') }}" class="content-img" alt="Coffeeshop">
        </div>

        <div class="content-right">
            <p>
                Café ini berdiri di Bogor sebagai ruang nyaman bagi siapa pun yang ingin rehat sejenak dari rutinitas.
                Di sini, pengunjung dapat menikmati kopi hangat, suasana tenang, dan momen kecil yang membuat pikiran
                terasa lebih lega. Setiap sudut café dirancang untuk memberi rasa teduh—baik untuk bekerja, berbincang,
                atau sekadar meluangkan waktu untuk diri sendiri. Dengan aroma kopi, musik lembut, dan pelayanan ramah,
                café ini berusaha membuat hari siapa pun terasa lebih ringan.
            </p>
        </div>
    </div>
</section>


    {{-- Categories --}}
    <section class="categories-section">
        <h1 class="categories-title">Categories</h1>
        <div class="categories-container">
            <div class="categories-box">
                <div class="imgBx">
                    <img src="{{ asset('images/coffee.jpg') }}">
                </div>
                <div class="categories-content">
                    <h3>Coffee</h3>
                    <p>
                        Setiap cangkir kopi di sini bukan hanya minuman, tapi momen kecil untuk berhenti sejenak.
                        Ada kehangatan yang pelan-pelan menenangkan, seolah dunia ikut melambat saat aroma kopi mulai
                        terasa.
                    </p>

                </div>
            </div>

            <div class="categories-box">
                <div class="imgBx">
                    <img src="{{ asset('images/matcha.jpg') }}">
                </div>
                <div class="categories-content">
                    <h3>Non Coffee</h3>
                    <p>
                        Setiap minuman non-coffee kami diracik untuk menyegarkan, bukan sekadar menghilangkan dahaga.
                        Rasanya lembut, tampilannya cantik, dan pastinya bisa memperbaiki mood kamu.
                    </p>

                </div>
            </div>

            <div class="categories-box">
                <div class="imgBx">
                    <img src="{{ asset('images/ricebowl.jpg') }}">
                </div>
                <div class="categories-content">
                    <h3>Food</h3>
                    <p>
                        Dari menu ringan hingga makanan berat, semuanya dibuat untuk memberikan pengalaman makan
                        yang sederhana namun tetap berkesan. Karena di café, makanan bukan sekadar pelengkap,
                        tapi bagian dari cerita.
                    </p>

                </div>
            </div>

            <div class="categories-box">
                <div class="imgBx">
                    <img src="{{ asset('images/dessert.jpg') }}">
                </div>
                <div class="categories-content">
                    <h3>Dessert</h3>
                    <p>
                        Setiap potongan dessert punya cara halus untuk membuatmu merasa lebih baik.
                        Manisnya pas, lembut, dan sempurna untuk menemani obrolan panjang ataupun waktu menyendiri.
                    </p>

                </div>
            </div>
        </div>
    </section>


    {{-- Review --}}
    <h1 class="section-title">Review Customer</h1>
    <section class="testimonials-section">

        <div class="section-content">
            <div class="slider-container">
                <div class="slider-wrapper">
                    <ul class="testimonials-list">
                        <li class="testimonial">
                            <img src="{{ asset('images/salma.jpeg') }}" alt="User" class="user-image">
                            <h3 class="name">Salma Salsabil</h3>
                            <i class="feedback">"Café cozy dengan rasa kopi yang pas dan ambience yang bikin betah."</i>
                        </li>
                        <li class="testimonial">
                            <img src="{{ asset('images/salma 2.jpeg') }}" alt="User" class="user-image">
                            <h3 class="name">Nadine</h3>
                            <i class="feedback">“Minuman enak, tempat bersih, vibes-nya asik. Recommended!”</i>
                        </li>
                        <li class="testimonial">
                            <img src="{{ asset('images/salma3.jpeg') }}" alt="User" class="user-image">
                            <h3 class="name">Kathrine</h3>
                            <i class="feedback">“Tempatnya nyaman, kopinya enak, dan pelayanannya ramah. Enak buat santai
                                atau kerja.”</i>
                        </li>
                        <li class="testimonial">
                            <img src="{{ asset('images/salma.jpeg') }}" alt="User" class="user-image">
                            <h3 class="name">Casey</h3>
                            <i class="feedback">"Tema cafe nya bagus banget! cocok buat foto."</i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Latest Blog --}}
    <section class="blog-section">
        <h1 class="blog-title">Latest Blog</h1>
        <div class="blog-container" onclick= "openPopup()">
            <div class="blog-card">
                <img src="{{ asset('images/coffee2.jpg') }}">
                <div class="blog-content">
                    <p>
                        Kopi selalu punya cerita di setiap
                        cangkirnya. Bukan hanya soal rasa, tapi
                        tentang momen kecil yang tercipta saat kita menikmatinya.
                        Banyak orang menjadikan kopi sebagai awal hari, tempat singgah di tengah kesibukan,
                        atau teman tenang di sore yang panjang.</p>
                </div>
            </div>
            <div class="blog-card">
                <img src="{{ asset('images/people.jpg') }}">
                <div class="blog-content">
                    <p>
                        Ada satu hal yang membuat café ini berbeda dari yang lain: suasananya tidak pernah benar-benar sepi.
                        Hampir setiap bulan, café ini selalu mengadakan event di depan tokonya.
                        Semua acara itu membuat café terasa hidup dan penuh energi positif.</p>
                </div>
            </div>
            <div class="blog-card">
                <img src="{{ asset('images/interior.jpg') }}">
                <div class="blog-content">
                    <p>
                        Interior café ini dirancang dengan nuansa hangat dan minimalis. Warna-warna earthy, lampu warm
                        membuat suasana
                        terasa nyaman sejak pertama masuk. meja dan sofa ditata rapi untuk kebutuhan kerja maupun santai.
                        Sederhana, estetik, dan bikin siapa pun betah berlama-lama.</p>
                </div>
            </div>
        </div>

        <script>
            function openPopup() {
                document.getElementById("popup").style.display = "flex";
            }

            function closePopup() {
                document.getElementById("popup").style.display = "none";
            }
        </script>

        <section class="gallery-section">
            <h1 class="gallery-title">Gallery</h1>
            <div class="gallery-container">
                <div class="gallery-content">
                    <!--Gallery 1!-->
                    <img src="{{ asset('images/gallery1.jpg') }}">
                    <img src="{{ asset('images/gallery2.jpg') }}">
                    <img src="{{ asset('images/gallery3.jpg') }}">

                    <!--Gallery 2!-->
                    <img src="{{ asset('images/gallery4.jpg') }}">
                    <img src="{{ asset('images/gallery5.jpg') }}">
                    <img src="{{ asset('images/gallery6.jpg') }}">
                </div>
            </div>
        </section>

    @endsection
