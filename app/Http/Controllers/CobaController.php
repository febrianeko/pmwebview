<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CobaController extends Controller
{
    public function tampilcoba()
    {
    	return 'Menampilkan halaman coba untuk latihan <strong>Name Route</strong>';
    }
    public function haltentang()
    {
    	$a = route('halcoba');
    	$l = '<a href="'. $a .'">Halaman Coba</a>';
    	return $l;
    }
}
