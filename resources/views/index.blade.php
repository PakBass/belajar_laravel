@extends('layout.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h1>Belajar Laravel 10!</h1>
            <h3>{{ $nama }}</h3>
            <h3>{{ $total }}</h3>
            <a href="/berita" class="btn btn-danger">Berita</a>
        </div>
        <div class="col-md-9">
            <a href="" class="btn btn-outline-primary mb-3">Add Image</a>
            <table class="table table-bordered table-striped table-responsive-md">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td class="text-center">{{ $post->image }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td></td>
                        </tr>
                    @empty
                        <td class="text-center text-muted" colspan="4">
                            Data Gambar tidak ada!
                        </td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
