@extends('layouts.app')

@section('content')
    <form class="{{ route('pembayaranair.index') }}" method="GET">
        <div class="card mt-3">
            <h5 class="card-header">Aplikasi Data Pembayaran Air</h5>
            <div class="card-body">
                <div class="col-8">
                    ID Pelanggan
                    <input type="text" class="form-control" name="id_pelanggan" id="id_pelanggan">
                </div>
                <div class="col-8 mt-3">
                    Nama 
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-3 gap-2">
            <input type="submit" class="btn btn-primary" value="Search">
            <a href="{{ route('pembayaranair.create') }}" class="btn btn-primary">Add</a>
        </div>
    </form>
    @include('components.alert')
    <div class="table-responsive">
        <table class="table table-bordered mt-3">
            <tr class="table-primary">
                <th>No</th>
                <th>ID Pelanggan</th>
                <th>Nama </th>
                <th>Tanggal</th>
                <th>Tarif Air</th>
                <th>Jumlah Pembayaran</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Action</th>
            </tr>
            @forelse ($pembayaranairs as $pembayaranair)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $pembayaranair->id_pelanggan }}</td>
                    <td>{{ $pembayaranair->nama }}</td>
                    <td class="text-center">{{ $pembayaranair->tanggal }}</td>
                    <td class="text-center">{{ $pembayaranair->tarif_air }}</td>
                    <td>{{ $pembayaranair->jumlah_pembayaran }}</td>
                    <td>{{ $pembayaranair->alamat }}</td>
                    <td class="text-center">{{ $pembayaranair->notelp }}</td>
                    <td>
                        <a href="{{ route('pembayaranair.show', $pembayaranair->id_pelanggan) }}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="{{ route('pembayaranair.edit', $pembayaranair->id_pelanggan) }}" class="btn btn-warning btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deleteData" data-id_pelanggan="{{ $pembayaranair->id_pelanggan }}">
                            Delete
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9">Tidak ada data</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection

@section('modal')
    <div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Menghapus Data Pembayaran Air</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('pembayaranair.destroy', 'delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Anda yakin menghapus data <span id="id_pelanggan"></span>?
                        <input type="hidden" name="id_pelanggan" id="id_pelangganup">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Ok">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $('#deleteData').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id_pelanggan = button.data('id_pelanggan');

            var modal = $(this);
            modal.find('.modal-body #id_pelanggan').text(id_pelanggan);
            modal.find('.modal-body #id_pelangganup').val(id_pelanggan);
        });
    </script>
@endsection
