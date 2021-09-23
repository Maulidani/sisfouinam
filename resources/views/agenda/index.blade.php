@extends('layouts.frontend.app',[
    'title' => 'List Agenda',
])
@section('content')
<!-- ##### Blog Area Start ##### -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>List Agenda</h3>
                </div>
            </div>
        </div>

        <div class="row">
            
            @foreach($agenda as $ag)
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                            {{ $ag->judul }}

                            <span class="badge badge-danger float-right">by : {{ $ag->user->name }}</span>

                        </div>
                        <div class="card-body">
                            <img src="{{ asset('uploads/img/agenda/'.$ag->thumbnail) }}" width="100%" style="height: 300px; object-fit: cover; object-position: center;">

                            <div class="card-text mt-3">
                                {!! Str::limit($ag->deskripsi) !!}
                            </div>

                            <a href="{{ route('agenda.show',$ag->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-lg pagination pagination-center justify-content-center">
                {{ $agenda->appends(Request::all())->links() }}
            </div>
        </div>
    </div>
</section>
@stop