@extends('layout.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="" class="btn btn-outline-primary mb-3">Add Data</a>
            <table class="table table-bordered table-striped table-responsive-md">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $p)
                        <tr>
                            <td class="text-center">{{ $p->image }}</td>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->content }}</td>
                            <td class="text-center"><button class="btn btn-info">Edit</button></td>
                            <td class="text-center"><button class="btn btn-danger">Delete</button></td>
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
