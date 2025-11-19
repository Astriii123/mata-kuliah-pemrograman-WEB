@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="bg-white rounded-lg shadow-lg p-6 flex flex-col md:flex-row gap-6 mb-8">
    <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-1/2 md:rounded-none md:rounded-l-lg" 
         src="{{ asset('images/gambarrr.jpg') }}" alt="Kedai Es Teler Sariwangi" />

    <div class="flex flex-col justify-start md:w-1/2 gap-4">
        <h2 class="text-4xl font-extrabold tracking-tight text-green-800 text-center md:text-left">
            Selamat Datang di Kedai Es Teler Sariwangi!
        </h2>
       
        <p class="text-lg text-green-700 text-center md:text-left">
            Kami menyediakan berbagai pilihan minuman segar seperti Es Teler, Big Tea, dan Alpukat Kocok dengan harga terjangkau.
        </p>

        <div class="rounded-lg overflow-hidden shadow-lg mt-4">
            <h3 class="text-2xl font-bold text-center text-green-900 mb-2">📍 Lokasi Kami</h3>
            <p class="text-center text-green-700 mb-2">
                Berada tepat di lorong kiri pertama sebelah kiri kampus UNM Parangtambung
            </p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.186761527223!2d119.427993414776!3d-5.186715096175504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee22c0f62e6c5%3A0x94b7f38f06d91e73!2sKedai%20Es%20Teler%20Sariwangi!5e0!3m2!1sid!2sid!4v1702032000000!5m2!1sid!2sid"
                width="100%"
                height="300"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe> 
        </div>
    </div>
</section>

<div class="text-center mt-8">
    <a href="{{ route('menu') }}" class="nav-pill text-lg">📋 Lihat Menu Lengkap</a>
</div>
@endsection