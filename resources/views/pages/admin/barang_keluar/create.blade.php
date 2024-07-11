@extends('app')
@section('title','Tambah Data Barang Keluar')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">

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

            <form role="form" method="POST" action="{{ route('barang-keluar-store') }}">
                @csrf
                <div class="form-group">
                    <label for="kd_barangInput">Barang</label>
                    <select name="kd_barang" id="deskripsiInput" class="form-control">
                        <option disabled>Pilih Barang</option>
                        @foreach ($barang as $barang )
                        <option value="{{ $barang->kd_barang }}" {{ old('kd_barang')==$barang->kd_barang ? 'selected' :
                            null
                            }}>{{
                            $barang->barang}}</option>
                        @endforeach
                    </select>
                    {{-- Error message --}}
                    @error('kd_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="quantityInput">Quantity</label>
                    <input type="number" name="quantity" id="quantityInput"
                        class="form-control @error('quantity') is-invalid @enderror" placeholder="Masukkan Quantity"
                        value="{{ old('quantity') }}">
                    {{-- Error message --}}
                    @error('quantity')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mt-2 d-flex justify-content-end">
                    <a href="{{ route('barang-keluar') }}" class="btn btn-secondary btn-sm">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-sm ml-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection