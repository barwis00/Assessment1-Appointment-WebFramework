<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Jadwal Bimbingan ESQBS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <div class="w-50 mw-100">

            <h1>Edit {{ $jadwal->judul }}</h1>

            {{ HTML::ul($errors->all()) }}

            {{ Form::model($jadwal, array('route' => array('jadwal.update', $jadwal->id), 'method' => 'PUT')) }}

            <div class="form-group py-3">
                {{ Form::label('judul', 'Judul') }}
                {{ Form::text('judul', Input::old('judul'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group py-3">
                {{ Form::label('deskripsi', 'Deskripsi') }}
                {{ Form::textarea('deskripsi', Input::old('deskripsi'), array('class' => 'form-control', 'rows' => '3')) }}
            </div>

            <div class="form-group py-3">
                {{ Form::label('mahasiswa', 'Mahasiswa') }}
                {{ Form::select('mahasiswa', $mahasiswa, $jadwal->mahasiswa_id, array('class' => 'form-control')) }}
            </div>

            <div class="form-group py-3">
                {{ Form::label('dosen', 'Dosen') }}
                {{ Form::select('dosen', $dosen, $jadwal->dosen_id, array('class' => 'form-control')) }}
            </div>


            <div class="form-group py-3">
                {{ Form::label('awal', 'Awal Bimbingan') }}
                {{ Form::date('awal', $jadwal->awal, ['class' => 'form-control']) }}
            </div>

            <div class="form-group py-3">
                {{ Form::label('akhir', 'Akhir Bimbingan') }}
                {{ Form::date('akhir', $jadwal->akhir, ['class' => 'form-control']) }}
            </div>

            {{ Form::submit('Submit', array('class' => 'btn btn-primary py-2 px-4')) }}

            {{ Form::close() }}

        </div>
    </div>
    
</body>
</html>