@extends('app')
@section('title','Tambah Data Barang')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <form role="form" method="POST" action="{{ route('barang-store') }}">
                @csrf
                <div class="form-group">
                    <label for="barangInput">Barang</label>
                    <input type="text" name="barang" id="barangInput"
                        class="form-control @error('barang') is-invalid @enderror" placeholder="Masukkan Barang"
                        value="{{ old('barang') }}">
                    {{-- Error message --}}
                    @error('barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsiInput">Satuan</label>
                    <select name="kd_satuan" id="deskripsiInput" class="form-control">
                        <option disabled>Pilih Satuan</option>
                        @foreach ($satuan as $satuan )
                        <option value="{{ $satuan->id }}">{{ $satuan->satuan}}</option>
                        @endforeach
                    </select>
                    {{-- Error message --}}
                    @error('deskripsi')
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
                    <a href="{{ route('barang') }}" class="btn btn-secondary btn-sm">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-sm ml-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection