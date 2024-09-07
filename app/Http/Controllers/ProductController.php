<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function food() {
        return view('product.food');
    }

    public function beauty() {
        return view('product.beauty');
    }

    public function home() {
        return view('product.home');
    }

    public function baby() {
        return view('product.baby');
    }
}
