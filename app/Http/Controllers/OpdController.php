<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Opd;

class OpdController extends Controller
{
    public function index()
    {
        $halaman = 'opd';
        $opd_list = Opd::all();
        return view('opd.index', compact('halaman', 'opd_list'));
    }
}
