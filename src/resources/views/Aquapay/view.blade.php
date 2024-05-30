@extends('layouts.app')
@section('content')
    <h5>Detail Data Pelanggan</h5>
    <div class="row mt-5">
        <div class="col-md-6">
            <h6>ID Pelanggan</h6>
            <p>{{ $pembayaranair->id_pelanggan }}</p>
        </div>
        <div class="col-md-6">
            <h6>Nama</h6>
            <p>{{ $pembayaranair->nama ?: 'Belum diatur' }}</p>
        </div>
        <hr>
        <div class="col-md-6">
            <h6>Tanggal</h6>
            <p>{{ $pembayaranair->tanggal }}</p>
        </div>
        <div class="col-md-6">
            <h6>Tarif</h6>
            <p>{{ $pembayaranair->tarif_air ?: 'Belum diatur' }}</p>
        </div>
        <hr>
        <div class="col-md-6">
            <h6>Jumlah Pembayaran</h6>
            <p>{{ $pembayaranair->jumlah_pembayaran ?: 'Belum diatur' }}</p>
        </div>
        <hr>
        <div class="col-md-6">
            <h6>Alamat</h6>
            <p>{{ $pembayaranair->alamat ?: 'Belum diatur' }}</p>
        </div>
        <div class="col-md-6">
            <h6>Nomor HP</h6>
            <p>{{ $pembayaranair->notelp ?: 'Belum diatur' }}</p>
        </div>
        <hr>
    </div>
    <a href="{{ route('pembayaranair.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
