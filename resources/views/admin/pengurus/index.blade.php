@extends('layouts.backend.app',[
    'title' => 'Manage Pengurus',
    'contentTitle' => 'Manage Pengurus',
])
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.pengurus.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
            <div class="card-body table-responsive">
                <table id="dataTable1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Divisi</th>
                  <th>Author</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $no=1;
                @endphp

                @foreach($pengurus as $pengurus_)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $pengurus_->nama_pengurus }}</td>

                  <td>{{ $pengurus_->divisiPengurus->nama_divisi ?? 'divisi dihapus' }}</td>
                  <td>{{ $pengurus_->user->name }}</td>

                  <td>
                    @if(auth()->user()->id == $pengurus_->user_id)
                    <div class="row ml-2">
                        <a href="{{ route('admin.pengurus.edit',$pengurus_->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>

                        <form method="POST" action="{{ route('admin.pengurus.destroy',$pengurus_->id) }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i></button>
                        </form>
                    </div>
                    @else
                    <a href="javasript:void(0)" class="btn btn-danger btn-sm">
                    <i class="fas fa-ban"></i> No Action Available
                    </a>
                    @endif
                  </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
@push('js')
<!-- DataTables -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#dataTable1").DataTable();
  });
</script>
@endpush
