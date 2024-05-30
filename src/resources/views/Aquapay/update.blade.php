@extends('layouts.app')

@section('content')
    <h5>Tambah Data Pembayaran Air</h5>
    <form action="{{ route('pembayaranair.update', $pembayaranair->id_pelanggan) }}" method="POST" class="mt-5">
        @method('put')
        @csrf
        <div class="row g-3 mb-3">
            <div class="col-md-6">
                ID Pelanggan
                <input type="text" class="form-control {{ $errors->has('id_pelanggan') ? 'is-invalid' : '' }}" name="id_pelanggan"
                    value="{{ $pembayaranair->id_pelanggan }}">
                @if ($errors->has('id_pelanggan'))
                    <p class="text-danger">{{ $errors->first('id_pelanggan') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Tanggal
                <input type="date" class="form-control {{ $errors->has('tanggal') ? 'is-invalid' : '' }}" name="tanggal"
                    value="{{ old('tanggal') ?: $pembayaranair->tanggal }}">
                @if ($errors->has('tanggal'))
                    <p class="text-danger">{{ $errors->first('tanggal') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Nama 
                <input type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}"
                    name="nama" value="{{ old('nama') ?: $pembayaranair->nama }}">
                @if ($errors->has('nama'))
                    <p class="text-danger">{{ $errors->first('nama') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Jumlah Pembayaran
                <input type="number" min="0"
                    class="form-control {{ $errors->has('jumlah_pembayaran') ? 'is-invalid' : '' }}" name="jumlah_pembayaran"
                    value="{{ old('jumlah_pembayaran') ?: $pembayaranair->jumlah_pembayaran }}">
                @if ($errors->has('jumlah_pembayaran'))
                    <p class="text-danger">{{ $errors->first('jumlah_pembayaran') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Tarif Air
                <input type="text" class="form-control {{ $errors->has('tarif_air') ? 'is-invalid' : '' }}" name="tarif_air"
                    value="{{ old('tarif_air') ?: $pembayaranair->tarif_air }}">
                @if ($errors->has('tarif_air'))
                    <p class="text-danger">{{ $errors->first('tarif_air') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Alamat 
                <textarea class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" name="alamat"
                    id="exampleFormControlTextarea1" rows="3">{{ old('alamat') ?: $pembayaranair->alamat }}</textarea>
                @if ($errors->has('alamat'))
                    <p class="text-danger">{{ $errors->first('alamat') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                Nomor HP
                <input type="text" class="form-control {{ $errors->has('notelp') ? 'is-invalid' : '' }}"
                    name="notelp" value="{{ old('notelp') ?: $pembayaranair->notelp }}">
                @if ($errors->has('notelp'))
                    <p class="text-danger">{{ $errors->first('notelp') }}</p>
                @endif
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Ubah">
        <a href="{{ route('pembayaranair.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
