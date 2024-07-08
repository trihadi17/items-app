@extends('app')
@section('title','Edit Data Satuan')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <form role="form" method="POST" action="{{ route('satuan-update', $satuan->id) }}">
                @csrf
                <div class="form-group">
                    <label for="satuanInput">Satuan</label>
                    <input type="text" name="satuan" id="satuanInput"
                        class="form-control @error('satuan') is-invalid @enderror" placeholder="Masukkan Satuan"
                        value="{{ old('satuan', $satuan->satuan)  }}">
                    {{-- Error message --}}
                    @error('satuan')
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
                        placeholder="Masukkan Deskripsi">{{ old('deskripsi' ,$satuan->deskripsi)  }}</textarea>
                    {{-- Error message --}}
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mt-2 d-flex justify-content-end">
                    <a href="{{ route('satuan') }}" class="btn btn-secondary btn-sm">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-sm ml-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection