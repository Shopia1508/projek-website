@extends('layout')

@section('title', 'Location')

@section('content')
<div class="bg-gray-100 min-h-screen pt-[100px]">

  <!-- CONTACT SECTION -->
  <div class="container py-5">
    <h2 class="text-center fw-bold mb-5 mt-5">CONTACT US</h2>

   
    <div class="row">
      <!-- LEFT: Address -->
      <div class="col-md-6">
        <h4 class="fw-bold mb-3">Address</h4>
        <div class="contact-info mb-4">
          <p><i class="bi bi-geo-alt"></i> Jl. Aurora Timur No. 19, Kel. Lunasari, Kec. Mirandera, Kota Selathora, Nusantara Raya 90211</p>
          <p><i class="bi bi-telephone"></i> 0877-7502-9366</p>
          <p><i class="bi bi-envelope"></i> info@FanatiCoffe.id</p>
        </div>
      </div>
    
      <!-- RIGHT: Google Maps -->
      <div class="col-md-6">
        <h4 class="fw-bold mb-3">Location</h4>
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3183238626634!2d106.79905247230558!3d-6.607309493386629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c54a9e78b82f%3A0x605a4f56009163b1!2sFanaticoffee%20-%20Coffeetaria!5e0!3m2!1sid!2sid!4v1763280163341!5m2!1sid!2sid"
          width="100%" 
          height="350" 
          style="border:0;" 
          allowfullscreen 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
    
@endsection
