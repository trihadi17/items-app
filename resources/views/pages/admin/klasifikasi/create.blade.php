@extends('app')
@section('title','Tambah Data Klasifikasi')
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

            <form role="form" method="POST" action="{{ route('klasifikasi-store') }}">
                @csrf
                <div class="form-group">
                    <label for="klasifikasiInput">Klasifikasi</label>
                    <input type="text" name="klasifikasi" id="klasifikasiInput"
                        class="form-control @error('klasifikasi') is-invalid @enderror"
                        placeholder="Masukkan Klasifikasi" value="{{ old('klasifikasi') }}">
                    {{-- Error message --}}
                    @error('klasifikasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsiInput">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="5"
                        placeholder="Masukkan Deskripsi">{{ old('deskripsi') }}</textarea>
                    {{-- Error message --}}
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mt-2 d-flex justify-content-end">
                    <a href="{{ route('klasifikasi') }}" class="btn btn-secondary btn-sm">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-sm ml-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection