<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi Jadwal Bimbingan ESQBS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <a href="{{ URL::to('jadwal/create') }}">
            <button class="btn btn-small btn-info">
                Buat Jadwal
            </button>
        </a>

        <div class="jumbotron text-center">
            <h2>{{ $jadwal->judul }} <span class="badge bg-secondary">{{ $jadwal->deskripsi }}</span></h2>
            <p>
                <strong>Deskripsi:</strong> {{ $jadwal->deskripsi }}<br>
                <strong>Awal:</strong> {{ $jadwal->awal }}<br>
                <strong>Akhir:</strong> {{ $jadwal->akhir }}<br>
            </p>
        </div>
    </div>
    
</body>
</html>