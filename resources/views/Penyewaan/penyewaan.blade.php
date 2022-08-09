@extends('sb-admin/app')
@section('title', 'Penyewaan')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Penyewaan</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('tambahsewa') }}" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus-square"></i>
            </span>
            <span class="text">Tambah Data</span>
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>NAMA PENYEWA</th>
                        <th>TGL SEWA</th>
                        <th>TGL KEMBALI</th>
                        <th>ALAT</th>
                        <th>DISKON</th>
                        <th>TOTAL</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                @foreach ( $penyewaan as $sewa)
                <tbody>
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $sewa->penyewa->nama }}</td>
                        <td>{{ $sewa['tgl_sewa'] }}</td>
                        <td>{{ $sewa['tgl_kmbl'] }}</td>
                        <td>
                            @foreach ($sewa->sewa as $item)
                                {{ $item->alat->nm_alat }} {{ $item->jumlah_alat }}<br>
                            @endforeach
                        </td>
                        <td>
                            @if($sewa->id_diskon )
                            {{$sewa->diskon->ttl_diskon}}%
                            @else
                            0%
                            @endif
                        </td>
                        <td>Rp. {{ $sewa['total_byr'] }}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal{{ $sewa->id }}">Kembali</a>
                            <!-- Modal -->
                            <div class="modal fade text-left" id="modal{{ $sewa->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Proses Kembali</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('kembalisewa', $sewa->id) }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="penyewa">Nama Penyewa</label>
                                                <select class="form-select" id="penyewa" name="penyewa" required disabled>
                                                    <option value="{{ $sewa->id }}" selected>{{ $sewa->penyewa->nama }}</option>
                                                </select>
                                            </div>
                                            <label>Nama Barang</label>
                                            @foreach ($sewa->sewa as $item)
                                            <div class="form-group">
                                                <input type="text" value="{{ $item->alat->nm_alat }} {{ $item->jumlah_alat }}" class="form-control" disabled>
                                            </div>
                                            @endforeach
                                            <div class="row form-group">
                                                <div class="col">
                                                    <label for="tgl_sewa">Tanggal Kembali</label>
                                                    <input type="date" value="{{ $sewa->tgl_kmbl }}" class="form-control" name="tgl_kmbl" id="tgl_kmbl">
                                                </div>
                                                <div class="col">
                                                    <label for="denda">Denda</label>
                                                    <input type="number" id="denda" name="denda" class="form-control" placeholder="Ketik (0) jika tidak denda" required>
                                                </div>
                                            </div>
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('showsewa', $sewa->id) }}"><i class="fas fa-eye" aria-hidden="true"
                                    style="color: black"></i></a>
                            |
                            <a href="{{ url('editsewa', $sewa->id) }}"><i class="fas fa-edit"
                                    aria-hidden="true"></i></a>
                            |
                            <a href="{{ url('deletesewa', $sewa->id) }}"><i class="fa fa-trash" aria-hidden="true"
                                    style="color: red"></i></a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
