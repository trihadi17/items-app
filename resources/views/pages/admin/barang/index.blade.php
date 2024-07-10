@extends('app')
@section('title','Barang')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <a href="{{ route('barang-create') }}"
                class="btn btn-sm btn-success waves-effect w-md waves-light m-b-30">Tambah Barang</a>


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
                        <th>Kode Barang</th>
                        <th>Barang</th>
                        <th>Satuan</th>
                        <th>Klasifikasi</th>
                        <th>Rak</th>
                        <th>Gudang</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $barang)
                    <tr>
                        <td>{{ $barang->kd_barang }}</td>
                        <td>{{ $barang->barang }}</td>
                        <td>{{ $barang->satuan->satuan }}</td>
                        <td>{{ $barang->klasifikasi->klasifikasi }}</td>
                        <td>{{ $barang->rak->rak }}</td>
                        <td>{{ $barang->gudang->gudang }}</td>
                        <td>{{ $barang->stok }}</td>
                        <td>

                            <div class="btn-group">
                                <a href="{{ route('barang-show',$barang->id)}}" type="button"
                                    class="btn btn-primary waves-effect btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('barang-edit', $barang->id) }}" type="button"
                                    class="btn btn-warning waves-effect btn-sm"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-danger waves-effect btn-sm" data-toggle="modal"
                                    data-target="#deleteModal" data-id="{{ $barang->id }}"><i
                                        class="fa fa-trash-o"></i></button>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Modal --}}
        <div class="modal fade bs-example-modal-sm" id="deleteModal" tabindex="-1" role="dialog"
            aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title mt-0" id="mySmallModalLabel">Konfirmasi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        Apakah kamu yakin untuk menghapus?
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                            {{-- DELETE ACTIOn --}}
                            <form action="" id="deleteForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm ml-2">Hapus</button>
                            </form>
                            {{-- END --}}
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
</div> <!-- end row -->
{{-- End Modal --}}
@endsection

@push('scripts')
<script type="text/javascript">
    /* show.bs.modal -> digunakan memanipulasi elemen pada modal berdasarkan data yang ada di tombol yang memicu modal  */
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // tombol yang memicu modal
        var varId = button.data('id'); // mengambil data ID dari atribut data-id pada tombol button yang memicu modal
        var form = $('#deleteForm'); // Form penghapus didalam modal
        form.attr('action','/barang/delete/' + varId); // action dari form dan menghapus berdasarkan id
    });
</script>
@endpush