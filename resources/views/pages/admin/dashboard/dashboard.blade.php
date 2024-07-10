@extends('app')
@section('title','Dashboard')
@section('content')


<div class="row">
    {{-- Barang --}}
    <div class="col-md-6 col-lg-3">
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-30">
                Total Barang
            </h4>
            <div class="widget-box-2">
                <div class="widget-detail-2">
                    <span class="badge badge-success badge-pill pull-left m-t-10"><i class="mdi mdi-archive"></i></span>
                    <h2 class="mb-0">{{ $barang }}</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- Satuan --}}
    <div class="col-md-6 col-lg-3">
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-30">
                Total Satuan
            </h4>
            <div class="widget-box-2">
                <div class="widget-detail-2">
                    <span class="badge badge-success badge-pill pull-left m-t-10"><i class="mdi mdi-scale"></i></span>
                    <h2 class="mb-0">{{ $satuan }}</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- Klasifikasi --}}
    <div class="col-md-6 col-lg-3">
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-30">
                Total Klasifikasi
            </h4>
            <div class="widget-box-2">
                <div class="widget-detail-2">
                    <span class="badge badge-success badge-pill pull-left m-t-10"><i
                            class="mdi mdi-format-list-bulleted-type"></i></span>
                    <h2 class="mb-0">{{ $klasifikasi }}</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- Rak --}}
    <div class="col-md-6 col-lg-3">
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-30">
                Total Rak
            </h4>
            <div class="widget-box-2">
                <div class="widget-detail-2">
                    <span class="badge badge-success badge-pill pull-left m-t-10"><i
                            class="mdi mdi-view-quilt"></i></span>
                    <h2 class="mb-0">{{ $rak }}</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- Gudang --}}
    <div class="col-md-6 col-lg-3">
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-30">
                Total Gudang
            </h4>
            <div class="widget-box-2">
                <div class="widget-detail-2">
                    <span class="badge badge-success badge-pill pull-left m-t-10"><i class="mdi mdi-garage"></i></span>
                    <h2 class="mb-0">{{ $gudang }}</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- Barang Masuk --}}
    <div class="col-md-6 col-lg-3">
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-30">
                Total Barang Masuk
            </h4>
            <div class="widget-box-2">
                <div class="widget-detail-2">
                    <span class="badge badge-success badge-pill pull-left m-t-10"><i
                            class="mdi mdi-file-import"></i></span>
                    <h2 class="mb-0">{{ $barangmasuk }}</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- Barang Keluar --}}
    <div class="col-md-6 col-lg-3">
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-30">
                Total Barang Keluar
            </h4>
            <div class="widget-box-2">
                <div class="widget-detail-2">
                    <span class="badge badge-success badge-pill pull-left m-t-10"><i
                            class="mdi mdi-file-export"></i></span>
                    <h2 class="mb-0">{{ $barangkeluar }}</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- User --}}
    <div class="col-md-6 col-lg-3">
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-30">
                Total User
            </h4>
            <div class="widget-box-2">
                <div class="widget-detail-2">
                    <span class="badge badge-success badge-pill pull-left m-t-10"><i
                            class="mdi mdi-account-circle"></i></span>
                    <h2 class="mb-0">{{ $user }}</h2>
                </div>
            </div>
        </div>
    </div>



</div>


@endsection