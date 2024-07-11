@extends('app')
@section('title','Lihat Data Barang Masuk')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="font-600 mt-0">{{ $barangMasuk->kd_transaksi }}</h4>
            <p class="text-success text-uppercase m-b-20 font-13">{{
                $barangMasuk->kd_barang }} ({{ $barangMasuk->barang->barang }})</p>

            <p class="text-muted font-13">{{ $barangMasuk->barang->deskripsi }}</p>

            <div class="task-tags m-t-20">
                <h5 class="font-600">Keterangan Barang : </h5>
                <p>Quantity : <span class="badge badge-primary">{{ $barangMasuk->quantity}} </span></p>
            </div>

            <div class="mt-20">
                <h5 class="font-600">Created : </h5>
                <div class="media m-b-30">
                    <img class="d-flex mr-3 rounded-circle" alt="64x64" src="/assets/images/users/avatar-2.jpg"
                        style="width: 48px; height: 48px;">
                    <div class="media-body">
                        <h4 class="media-heading mb-0 mt-0">{{ $barangMasuk->user->nama }}</h4>
                        <p>{{ date('d F Y', strtotime($barangMasuk->tanggal))}}
                            <small class="text-muted">{{ date('H:i:s', strtotime($barangMasuk->tanggal))
                                }}</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection