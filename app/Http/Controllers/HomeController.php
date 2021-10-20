<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;
use App\Models\Artikel;
use App\Models\Pengumuman;
use App\Models\Pengurus;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home.index',[
            'agenda' => Agenda::latest()->take(2)->get(),
            'artikel' => Artikel::with(['user','kategoriArtikel'])->latest()->take(2)->get(),
            'pengumuman' => Pengumuman::with(['user'])->latest()->take(2)->get(),
        ]);
    }

    public function about()
    {
        $pengurus = Pengurus::with(['user', 'divisiPengurus'])->get();
    	return view('home.about', compact('pengurus'));
    }

    public function contact()
    {
    	return view('home.contact');
    }
}