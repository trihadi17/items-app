@extends('app')
@section('title','Lihat Data')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box project-box">
            <h4 class="mt-0 text-inverse">{{ $rak->rak }}</h4>
            <p class="text-muted font-13">{{ $rak->deskripsi }}
            </p>
        </div>
    </div>
</div>

@endsection