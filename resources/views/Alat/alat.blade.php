@extends('sb-admin/app')
@section('title', 'Alat')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Alat</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('tambahalat') }}" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus-square"></i>
            </span>
            <span class="text">Tambah Data</span>
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>GAMBAR</th>
                        <th>HARGA</th>
                        <th>STOK</th>
                        <th>JUMLAH</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                @foreach ($dtAlat as $itemAlt)
                <tbody>
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $itemAlt['nm_alat'] }}</td>
                        <td class="text-center"><img width="75px" src="{{ url('upload/alat/'.$itemAlt['gambar']) }}">
                        </td>
                        <td class="text-center">{{ $itemAlt['harga'] }}</td>
                        <td class="text-center">{{ $itemAlt['stok'] }}</td>
                        <td class="text-center">{{ $itemAlt['jumlah'] }}</td>
                        <td class="text-center">
                            <a href="{{ url('editalat', $itemAlt->id) }}"><i class="fas fa-edit"></i></a>
                            |
                            <a href="{{ url('deletealat', $itemAlt->id) }}"><i class="fas fa-trash-alt"
                                    style="color:red"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection