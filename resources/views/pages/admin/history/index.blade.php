@extends('app')
@section('title','History')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h2>{{ Auth::user()->nama }}</h2>
        </div>
    </div>
</div>


@endsection