<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
    	$agenda = Agenda::latest()->paginate(4);
    	return view('agenda.index',compact('agenda'));
    }

    public function show(Agenda $agenda)
    {
    	return view('agenda.show',compact('agenda'));
    }

    // public function search(Request $request)
    // {	
    // 	$artikel = Artikel::with(['user','kategoriArtikel'])->where(function($query) use ($request){
    // 		$query->where('judul','like','%'.$request->keyword.'%')
    //         ->orWhere('deskripsi','like','%'.$request->keyword.'%');
    // 	})->paginate(4);

    // 	return view('artikel.index',compact('artikel'));
    // }
}
