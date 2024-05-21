@extends('layouts.master')
@section('title','Dashboard')
@section('heading','Halaman Dashboard')

@section('content')
        <div class="card-body">
        Halo {{ Auth::user()->name }}, <br> nanti akan ada tampilan dashboard, mohon sabar
        </div>
        <!-- /.card-body -->

@endsection