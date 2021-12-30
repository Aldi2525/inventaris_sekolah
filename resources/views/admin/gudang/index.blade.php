@extends('adminlte::page')

@section('title','Barang')

@section('content_header')

<br>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @include('layouts._flash')
                   <b>Data Barang</b>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="example">
                        <thead>
                            <tr>
                                <th><i>Id</i></th>
                                <th><i>Nama Barang</i></th>
                                <th><i>Jumlah Stock</i></th>
                                <th><i>Aksi</i></th>
                            </tr>
                        </thead>
                            @php $no=1; @endphp
                            @foreach ($gudang as $data)
                            <tbody>
                             <tr>
                                 <td>{{$no++}}</td>
                                 <td>{{$data->bmasuk->nama_barang}}</td>
                                 <td>{{$data->bmasuk->jumlah_stok}}</td>



                                 <td>
                                     <form action="{{route('gudang.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('supplier.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapusnya')">HAPUS</button>
                                        </form>
                                 </td>
                             </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('css')
<link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">
@endsection

@section('js')
 <script src="{{asset('DataTables/datatables.min.js')}}"></script>
 <script>
     $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>
@endsection
