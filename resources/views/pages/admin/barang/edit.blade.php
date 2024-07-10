@extends('app')
@section('title','Edit Data Barang')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <form role="form" method="POST" action="{{ route('barang-update', $barang->id) }}">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="kd_barangInput">Kode Barang</label>
                    <input type="text" name="kd_barang" id="kd_barangInput"
                        class="form-control @error('kd_barang') is-invalid @enderror" placeholder="Masukkan Kode Barang"
                        value="{{ old('kd_barang', $barang->kd_barang) }}">
                    {{-- Error message --}}
                    @error('kd_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="barangInput">Barang</label>
                    <input type="text" name="barang" id="barangInput"
                        class="form-control @error('barang') is-invalid @enderror" placeholder="Masukkan Barang"
                        value="{{ old('barang', $barang->barang) }}">
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
                        <option value="{{ $satuan->id }}" {{ old('kd_satuan', $barang->kd_satuan)==$satuan->id ?
                            'selected' : null
                            }}>{{
                            $satuan->satuan}}</option>
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
                    <label for="deskripsiInput">Klasifikasi</label>
                    <select name="kd_klasifikasi" id="deskripsiInput" class="form-control">
                        <option disabled>Pilih Klasifikasi</option>
                        @foreach ($klasifikasi as $klasifikasi )
                        <option value="{{ $klasifikasi->id }}" {{ old('kd_klasifikasi',$barang->kd_klasifikasi)
                            ==$klasifikasi->id ? 'selected' :
                            null
                            }}>{{
                            $klasifikasi->klasifikasi}}</option>
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
                    <label for="deskripsiInput">Rak</label>
                    <select name="kd_rak" id="deskripsiInput" class="form-control">
                        <option disabled>Pilih Rak</option>
                        @foreach ($rak as $rak )
                        <option value="{{ $rak->id }}" {{ old('kd_rak',$barang->kd_rak)==$rak->id ? 'selected' : null
                            }}>{{
                            $rak->rak}}</option>
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
                    <label for="deskripsiInput">Gudang</label>
                    <select name="kd_gudang" id="deskripsiInput" class="form-control">
                        <option disabled>Pilih Gudang</option>
                        @foreach ($gudang as $gudang )
                        <option value="{{ $gudang->id }}" {{ old('kd_gudang',$barang->kd_gudang)==$gudang->id ?
                            'selected' : null
                            }}>{{
                            $gudang->gudang}}</option>
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
                    <label for="stokInput">Stok</label>
                    <input type="number" name="stok" id="stokInput"
                        class="form-control @error('stok') is-invalid @enderror" placeholder="Masukkan Stok"
                        value="{{ old('stok', $barang->stok) }}">
                    {{-- Error message --}}
                    @error('stok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="deskripsiInput">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="5"
                        placeholder="Masukkan Deskripsi">{{ old('deskripsi',$barang->deskripsi) }}</textarea>
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