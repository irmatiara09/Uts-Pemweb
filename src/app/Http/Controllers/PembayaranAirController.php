<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranAir;
class PembayaranAirController extends Controller
{
    public function index()
    {
        $data_PembayaranAir = PembayaranAir::all();
        return view ('PembayaranAir.index',['data_PembayaranAir' => $data_PembayaranAir]);
    }
} 