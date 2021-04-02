<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa ESQBS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <h1>Daftar Mahasiswa ESQBS</h1>

        <a href="{{ URL::to('jadwal/create') }}">
            <button class="btn btn-small btn-info">
                Buat Jadwal
            </button>
        </a>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>NIM</td>
                    <td>Tanggal Lahir</td>
                    <td>Alamat</td>
                    <td>Tahun Masuk</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->nim }}</td>
                    <td>{{ $value->tanggal_lahir }}</td>
                    <td>{{ $value->alamat }}</td>
                    <td>{{ $value->tahun_masuk }}</td>
                    <td>
                        <a href="{{ URL::to('mahasiswa/' . $value->id) }}">
                            <button class="btn btn-small btn-success">
                                Show
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>