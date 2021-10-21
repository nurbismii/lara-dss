@extends('layouts.template')

@section('content')
<div class="container-fluid">
    <div class="text-center">
        <div class="error mx-auto" data-text="DSS">DSS</div>
        <p class="lead text-gray-800 mb-5">Sistem Penunjang Keputusan</p>
        <p class="text-gray-500 mb-0">Selamat Datang!!!</p>
        <a href="{{ route('penilaian.index')}}">&larr; Pergi ke Penilaian</a>
    </div>
</div>
@endsection