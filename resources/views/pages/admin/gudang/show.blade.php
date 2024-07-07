@extends('app')
@section('title','Lihat Data')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box project-box">
            <h4 class="mt-0 text-inverse">{{ $gudang->gudang }}</h4>
            <p class="text-muted font-13">{{ $gudang->deskripsi }}
            </p>
        </div>
    </div>
</div>

@endsection