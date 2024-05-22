@extends('layouts.master')
@section('title','Edit Pegawai')
@section('heading','Edit Pegawai')

@section('bc')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"Edit Pegawai</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">

        </h3>

        
        </div>
        <div class="card-body">
            <form method="POST" action="/pegawai/{{$peg->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nip</label>
                    <input type="text" name="nip" readonly value="{{$peg->id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama</label>
                    <input type="text" name="nama" value="{{$peg->nama}}" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                    <input type="text" name="jabatan" value="{{$peg->jabatan}}" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="text" name="alamat"  value="{{$peg->alamat}}" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No telp</label>
                    <input type="text" name="no_telp" value="{{$peg->no_telp}}" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->

    </div>
@endsection