<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="p-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <h1>Belajar Laravel 10!</h1>
                <h3>{{ $nama }}</h3>
                <h3>{{ $total }}</h3>
                <a href="/berita" class="btn btn-danger">Berita</a>
            </div>
            <div class="col-md-9">
                <a href="" class="btn btn-outline-primary mb-3">Add Image</a>
                <table class="table table-bordered table-striped">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>
