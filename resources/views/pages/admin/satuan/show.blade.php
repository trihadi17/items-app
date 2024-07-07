@extends('app')
@section('title','Lihat Data')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box project-box">
            <h4 class="mt-0 text-inverse">{{ $satuan->satuan }}</h4>
            <p class="text-muted font-13">{{ $satuan->deskripsi }}
            </p>
        </div>
    </div>
</div>

@endsection