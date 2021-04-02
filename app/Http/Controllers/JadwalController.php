<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        return View::make('jadwal.index')->with('jadwal', $jadwal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::pluck('nama', 'id');
        $dosen = Dosen::pluck('nama', 'id');

        return View::make('jadwal.create')->with('mahasiswa', $mahasiswa)->with('dosen', $dosen);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jadwal = new Jadwal();
        $jadwal->judul = $request->judul;
        $jadwal->deskripsi = $request->deskripsi;
        $jadwal->mahasiswa_id = $request->mahasiswa;
        $jadwal->dosen_id = $request->dosen;
        $jadwal->awal = $request->awal;
        $jadwal->akhir = $request->akhir;
        // $jadwal->create_at = '2021-04-02';
        // $jadwal->update_at = '2021-04-02';
        $jadwal->save();

        // redirect
        Session::flash('message', 'Membuat jadwal bimbingan sukses!');
        return Redirect::to('jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal = Jadwal::find($id);
        return View::make('jadwal.show')->with('jadwal', $jadwal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = Jadwal::find($id);
        $mahasiswa = Mahasiswa::pluck('nama', 'id');
        $dosen = Dosen::pluck('nama', 'id');
        return View::make('jadwal.edit')->with('jadwal', $jadwal)->with('mahasiswa', $mahasiswa)->with('dosen', $dosen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->judul = $request->judul;
        $jadwal->deskripsi = $request->deskripsi;
        $jadwal->mahasiswa_id = $request->mahasiswa;
        $jadwal->dosen_id = $request->dosen;
        $jadwal->awal = $request->awal;
        $jadwal->akhir = $request->akhir;
        // $jadwal->update_at = '2021-04-02';
        $jadwal->save();

        // redirect
        Session::flash('message', 'Update jadwal bimbingan sukses!');
        return Redirect::to('jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();

        // redirect
        Session::flash('message', 'Delete jadwal bimbingan sukses!');
        return Redirect::to('jadwal');
    }
}
