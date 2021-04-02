<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jadwal Bimbingan ESQBS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <h1>Jadwal Bimbingan ESQBS</h1>

        <a href="{{ URL::to('jadwal/create') }}">
            <button class="btn btn-small btn-info">
                Buat Jadwal
            </button>
        </a>

        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Judul</td>
                    <td class="mw-100" style="width:350px">Deskripsi</td>
                    <td>Mahasiswa</td>
                    <td>Dosen</td>
                    <td>Awal</td>
                    <td>Akhir</td>
                    <td class="mw-100" style="width: 250px">Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($jadwal as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->judul }}</td>
                    <td>{{ $value->deskripsi }}</td>
                    <td>
                        <a class="link" href="{{ URL::to('mahasiswa/'.$value->mahasiswa_id)}}">
                            {{ $value->mahasiswa_id }}
                        </a>
                    </td>
                    <td>
                        <a href="{{ URL::to('dosen/'.$value->dosen_id)}}">
                            {{ $value->dosen_id }}
                        </a>
                    </td>
                    <td>{{ $value->awal }}</td>
                    <td>{{ $value->akhir }}</td>
                    <td>
                        <a href="{{ URL::to('jadwal/' . $value->id) }}" class="btn btn-small btn-info" role="button">
                            Show
                        </a>
                        <a href="{{ URL::to('jadwal/' . $value->id . '/edit') }}" class="btn btn-small btn-primary" role="button">
                            Edit
                        </a>
                        {{ Form::open(array('url' => 'jadwal/' . $value->id, 'class' => 'pull-right d-inline')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>