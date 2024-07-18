@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Tambah Data</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Ada beberapa masalah dengan inputan Anda.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('penduduk.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nik">Nik :</label>
                    <input type="text" name="nik" class="form-control" placeholder="nik">
                </div>
                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" class="form-control" placeholder="nama">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat" class="form-control" placeholder="alamat">
                </div>
                <div class="form-group">
                    <label for="tgllhr">Tanggal Lahir :</label>
                    <input type="date" name="tgllhr" class="form-control" placeholder="tgllhr">
                </div>
                <div class="form-group">
                    <label for="telpon">Telpon :</label>
                    <input type="text" name="telpon" class="form-control" placeholder="telpon">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
