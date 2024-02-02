@extends('layout.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Berita terbaru - Laravel 10!</h1>
            <p>{{ $news }}</p>
            <a href="{{ route('belajar.index') }}" class="btn btn-info">Kembali</a>
        </div>
    </div>
</div>
@endsection
