<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\ArtikelDeleteEvent;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\Pengurus;
use App\Models\Divisi;
use Str;
use File;

class PengurusController extends Controller
{
    private $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengurus = Pengurus::with(['user', 'divisiPengurus'])->get();
        return view('admin.pengurus.index', compact('pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisiPengurus = Divisi::all();
        return view('admin.pengurus.create', compact('divisiPengurus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengurus::create([
            'nama_pengurus' => $request->nama_pengurus,
            'divisi_id' => $request->divisi_id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('admin.pengurus.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengurus = Pengurus::find($id);
        $divisiPengurus = Divisi::get();
        return view('admin.pengurus.edit', compact('pengurus', 'divisiPengurus'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->authorize('update',$artikel);

        // Artikel::create([
        //     'judul' => $request->judul,
        //     'deskripsi' => $this->summernoteService->imageUpload('artikel'),
        //     'thumbnail' => $this->uploadService->imageUpload('artikel'),
        //     'slug' => Str::slug($request->judul),
        //     'user_id' => auth()->user()->id,
        //     'kategori_artikel_id' => $request->kategori_artikel_id,
        // ]);

        // return redirect()->route('admin.artikel.index')->with('success','Data berhasil diupdate');


        $data = Pengurus::find($id);

        $data->nama_pengurus = $request->nama_pengurus;
        $data->divisi_id = $request->divisi_id;
        $data->user_id = auth()->user()->id;

        $data->save();

        return redirect()->route('admin.pengurus.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pengurus::find($id);

        $data->delete();


        // $this->authorize('delete', $pengurus);

        // event(new ArtikelDeleteEvent($pengurus));

        // $pengurus->delete();
        return redirect()->route('admin.pengurus.index')->with('success', 'Data berhasil dihapus');
    }
}