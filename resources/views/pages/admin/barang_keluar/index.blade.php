@extends('app')
@section('title','Barang Keluar')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <a href="{{ route('barang-keluar-create') }}"
                class="btn btn-sm btn-success waves-effect w-md waves-light m-b-30">Tambah Barang Keluar</a>

            {{-- Message Success --}}
            @if (session('success'))
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
            @endif
            {{-- End --}}

            {{-- Message Error --}}
            @if (session('error'))
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                </div>
            </div>
            @endif
            {{-- End --}}

            <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kode Transaksi</th>
                        <th>Tanggal</th>
                        <th>Kode Barang</th>
                        <th>Barang</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangKeluar as $barangKeluar )

                    <tr>
                        <td>{{ $barangKeluar->kd_transaksi }}</td>
                        <td>
                            <p>{{ date('d F Y', strtotime($barangKeluar->created_at))}}
                                <small class="text-muted">{{ date('H:i:s', strtotime($barangKeluar->created_at))
                                    }}</small>
                            </p>
                        </td>
                        <td>{{ $barangKeluar->kd_barang }}</td>
                        <td>{{ $barangKeluar->barang->barang }}</td>
                        <td>{{ $barangKeluar->quantity }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('barang-keluar-show',$barangKeluar->id) }}" type="button"
                                    class="btn btn-primary waves-effect btn-sm"><i class="fa fa-eye"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@endsection