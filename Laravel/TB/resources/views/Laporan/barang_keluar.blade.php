@extends('adminlte::page')

@section('title', 'Barang Keluar')

@section('content_header')
    <h1 class="m-0 text-dark text-center">Barang Keluar</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <a class="btn btn-primary" href="{{route ('admin.print.keluar')}}"><i></i>Unduh Laporan</a>
                    <hr />
                    {{-- Table --}}
                    <table id="table-data" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal Keluar</th>
                                <th>Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                
                            @foreach ($products as $product)
                            @if ($product->jenis == 'keluar')
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->created_at}}</td>
                                    <td>{{ $product->qty }}</td>
                                </tr>
                                @endif
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{-- end Table --}}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('js')
@stop
