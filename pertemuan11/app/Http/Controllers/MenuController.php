<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = [
            ['name' => 'Es Teler Biasa', 'price' => 10000],
            ['name' => 'Es Teler Alpukat', 'price' => '8.000 / 10.000'],
            ['name' => 'Es Buah Sop Buah Segar', 'price' => 10000],
            ['name' => 'Es Kelapa Muda', 'price' => 8000],
            ['name' => 'Es Cendol', 'price' => 8000],
            ['name' => 'Salad Buah', 'price' => 12000],
            ['name' => 'Es Campur', 'price' => 10000],
            ['name' => 'Es Pisang Ijo', 'price' => 10000],
            ['name' => 'Es Cincau', 'price' => 7000],
            ['name' => 'Es Jeruk Peras', 'price' => 5000],
            ['name' => 'Big Tea', 'price' => 5000],
            ['name' => 'Alpukat Kocok + Milo', 'price' => 12000]
        ];

        return view('menu.index', [
            'title' => 'Menu',
            'menuItems' => $menuItems
        ]);
    }
}