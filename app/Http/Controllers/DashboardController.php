<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;
use App\Models\Obat;

class DashboardController extends Controller
{
    //
    public function index() {
        $periksas = Periksa::all();
        $obats = Obat::all();
        return view('layouts.dashboard', compact('periksas', 'obats'));
    }
}
