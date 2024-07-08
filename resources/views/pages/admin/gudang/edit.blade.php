@extends('app')
@section('title','Edit Data Gudang')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <form role="form" method="POST" action="{{ route('gudang-update', $gudang->id) }}">
                @csrf
                <div class="form-group">
                    <label for="gudangInput">Gudang</label>
                    <input type="text" name="gudang" id="gudangInput"
                        class="form-control @error('gudang') is-invalid @enderror" placeholder="Masukkan gudang"
                        value="{{ old('gudang', $gudang->gudang)  }}">
                    {{-- Error message --}}
                    @error('gudang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsiInput">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="5"
                        {{-- Kenapa harus menggunakan old juga? karena ketika sudah dirubah dan ada input field yang
                        kosong maka dia mmenyimpan data yang telah diubah bukan lagi menyimpan data dari database, itu
                        sangat penting. Karna tidak perlu lagi ketik ulang utk ngerubah --}}
                        placeholder="Masukkan Deskripsi">{{ old('deskripsi' ,$gudang->deskripsi)  }}</textarea>
                    {{-- Error message --}}
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mt-2 d-flex justify-content-end">
                    <a href="{{ route('gudang') }}" class="btn btn-secondary btn-sm">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-sm ml-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection