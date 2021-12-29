@extends('adminlte::page')

@section('title','Barang Masuk')

@section('content_header')

<br>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Barang Masuk</div>
                <div class="card-body">
                    <form action="{{route('bmasuk.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror">
                            <label for="">Tanggal Masuk</label>
                            <input type="date" name="tgl_msk" class="form-control @error('tgl_msk') is-invalid @enderror">
                            <label for="">Jumlah Masuk</label>
                            <input type="number" name="jumlah_msk" class="form-control @error('jumlah_msk') is-invalid @enderror">
                            <label for="">Supplier</label>
                            <input type="text" name="id_supplier" class="form-control @error('id_supplier') is-invalid @enderror">
                            @error('nama_barang')

                            <span class="invalid-feedbaack" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group right">
                            <button type="reset" class="btn btn-outline-danger">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
