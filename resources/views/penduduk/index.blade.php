@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="table-responsive">
            <p style="font-weight:bold;text-align:center;top:auto; font-size: 30px;">
                Tabel Penduduk
            </p>
            <div class="text-end mb-5">
            <a href="{{ route('penduduk.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <th>No.</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Telpon</th>
                    </thead>
                @foreach ($data as $key => $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->nik }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>{{ date('d M Y', strtotime($value->tgllhr)) }}</td>
                        <td>{{ $value->telpon }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </table>
    </div>
</div>
@endsection
