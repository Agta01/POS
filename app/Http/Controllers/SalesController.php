<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function transaksi_sales($hari) {
        return view('sales.sales')
        ->with('hari', $hari);
    }
}
