@extends('layouts.backend.app',[
	'title' => 'Edit Pengurus',
	'contentTitle' => 'Edit Pengurus',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.pengurus.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.pengurus.update',$pengurus->id) }}">
					@csrf
                    @method('PATCH')
					<div class="form-group">
						<label for="name">Nama Lengkap</label>
						<input value="{{ $pengurus->nama_pengurus }}"  required="" class="form-control" type="" name="nama_pengurus" id="name" placeholder="" required>
					</div>
                    <div class="form-group">
                        <label>Divisi</label>
                        <select required="" class="form-control" name="divisi_id" required>
                        <option selected="" disabled="" value="" >- PILIH KATEGORI -</option>
                        @foreach($divisiPengurus as $divisi)
                            <option value="{{ $divisi->id }}">{{ $divisi->nama_divisi }}</option>
                        @endforeach
                        </select>
                    </div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop
