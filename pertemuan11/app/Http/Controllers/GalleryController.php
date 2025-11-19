<?php

namespace App\Http\Controllers; // Pastikan namespace ini

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Halaman Galeri
     */
    public function index()
    {
        $galleryImages = [
            'salad_buahh.jpg' => 'Salad Buah',
            'psng_ijo.jpg' => 'Es Pisang Ijo',
            'alpukad_milo.jpg' => 'Alpukat Kocok',
            'cendol.jpg' => 'Es Cendol',
            'cincau.jpg' => 'Es Cincau',
            'es campur.jpg' => 'Es Campur',
            'es kelapa.jpg' => 'Es Kelapa Muda',
            'es_teler_alpukad.jpg' => 'Es Teler Alpukat',
            'es_teler_biasa.jpg' => 'Es Teler Biasa',
            'tea.jpg' => 'Big Tea',
            'jeruk_peras.jpg' => 'Es Jeruk Peras'
        ];

        return view('gallery.index', [
            'title' => 'Galeri',
            'galleryImages' => $galleryImages
        ]);
    }
}