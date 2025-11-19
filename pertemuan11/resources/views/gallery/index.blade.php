@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
<section class="bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-4xl font-extrabold text-center mb-8 text-green-800">Galeri Menu</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
        @foreach($galleryImages as $image => $alt)
        <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow">
            <img src="{{ asset('images/' . $image) }}" alt="{{ $alt }}" 
                 class="object-cover h-64 w-full hover:scale-105 transition-transform duration-300" />
            <p class="text-center p-3 text-green-800 font-semibold">{{ $alt }}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection