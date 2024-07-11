@extends('app')
@section('title','History')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Barang</th>
                        <th>Quantity</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>User Created</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($history as $history )

                    <tr>
                        <td>{{ $history->kd_barang }}</td>
                        <td>{{ $history->barang->barang }}</td>
                        <td>{{ $history->quantity }}</td>
                        <td>
                            <p>{{ date('d F Y', strtotime($history->created_at))}}
                                <small class="text-muted">{{ date('H:i:s', strtotime($history->created_at))
                                    }}</small>
                            </p>
                        </td>

                        {{-- Status --}}
                        @if ($history->status == 'Barang Masuk')
                        <td><span class="badge badge-success">{{ $history->status }}</span></td>
                        @else
                        <td><span class="badge badge-danger">{{ $history->status }}</span></td>
                        @endif
                        {{-- --}}

                        <td>{{ $history->user->nama }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@endsection