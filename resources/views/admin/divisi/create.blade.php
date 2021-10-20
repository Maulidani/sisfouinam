@extends('layouts.backend.app',[
	'title' => 'Tambah Divisi',
	'contentTitle' => 'Tambah Divisi'
])
@section('content')

<div class="">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <a href="{{ route('admin.divisi.index') }}" class="btn btn-success btn-sm">Kembali</a>
            </h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.divisi.store') }}">
            @csrf
            <div class="form-group">
                <label for="nama_divisi">Nama Divisi</label>
                <input required="" type="" name="nama_divisi" placeholder="" class="form-control" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
        </form>
    </div>
</div>

@stop
