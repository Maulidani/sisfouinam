@extends('layouts.backend.app',[
	'title' => 'Edit Divisi',
	'contentTitle' => 'Edit Divisi'
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.divisi.update',$divisi->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama_divisi">Nama Divisi</label>
                <input value="{{ $divisi->nama_divisi }}" required="" type="" name="nama_divisi" placeholder="" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
        </form>
    </div>
</div>

@stop
