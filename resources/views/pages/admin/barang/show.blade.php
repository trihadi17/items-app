@extends('app')
@section('title','Lihat Data')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="font-600 mt-0">{{ $barang->barang }} ({{ $barang->kd_barang }})</h4>

            <p class="text-muted font-13">{{ $barang->deskripsi }}</p>

            <div class="task-tags m-t-20">
                <h5 class="font-600">Keterangan Barang : </h5>
                <span class="badge badge-primary">{{ $barang->satuan->satuan }} </span>
                <span class="badge badge-primary ml-1">{{ $barang->klasifikasi->klasifikasi}}</span>
                <span class="badge badge-primary ml-1">{{ $barang->rak->rak}}</span>
                <span class="badge badge-primary ml-1">{{ $barang->gudang->gudang}}</span>
            </div>

            <div class="mt-20">
                <h5 class="font-600">Created : </h5>
                <div class="media m-b-30">
                    <img class="d-flex mr-3 rounded-circle" alt="64x64" src="/assets/images/users/avatar-2.jpg"
                        style="width: 48px; height: 48px;">
                    <div class="media-body">
                        <h4 class="media-heading mb-0 mt-0">{{ $barang->user->nama }}</h4>
                        <span class="badge badge-primary">{{ date('d F Y H:i:s', strtotime($barang->created_at))
                            }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection