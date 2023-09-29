<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NykaaController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'ASUS TUF F15', 'brand' => 'ASUS TUF', 'price' => '₹1,20,000'],
            ['name' => 'ASUS TUF A15', 'brand' => 'ASUS TUF', 'price' => '₹1,25,000'],
            ['name' => 'Lenovo Legion 5i', 'brand' => 'Lenovo Legion', 'price' => '₹1,55,000'],
        ];

        return view('store', compact('products'));
    }
}
