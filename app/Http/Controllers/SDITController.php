<?php

namespace App\Http\Controllers;

use App\Models\SDIT;
use App\Models\School;
use App\Http\Requests\StoreSDITRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SDITController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $sdit = SDIT::all();

      return view('user_view.pages.ppdb.form.form_sdit', [
        'sdit' => $sdit,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSDITRequest $request)
    {
      $sdit = new SDIT();

      $sdit->school_id = $request->school_id;
      $sdit->stay = $request->stay;
      $sdit->department = $request->department;
      $sdit->program = $request->program;
      $sdit->nama = $request->nama;
      $sdit->ttl = $request->ttl;
      $sdit->alamat = $request->alamat;
      $sdit->asal_sekolah = $request->asal_sekolah;
      $sdit->nisn = $request->nisn;
      $sdit->nik = $request->nik;
      $sdit->kk = $request->kk;
      $sdit->nama_ayah = $request->nama_ayah;
      $sdit->nik_ayah = $request->nik_ayah;
      $sdit->nama_ibu = $request->nama_ibu;
      $sdit->nik_ibu = $request->nik_ibu;
      $sdit->pekerjaan_ayah = $request->pekerjaan_ayah;
      $sdit->pekerjaan_ibu = $request->pekerjaan_ibu;
      $sdit->ukuran_baju = $request->ukuran_baju;
      $sdit->hp_ortu = $request->hp_ortu;
      $sdit->hp_siswa = $request->hp_siswa;
      $sdit->image = $request->image;
      $sdit['image'] = $request->file('image')->store('', 'public');

      $sdit->save();

      return redirect()->route('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SDIT  $sdit
     * @return \Illuminate\Http\Response
     */
    public function show(SDIT $sdit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SDIT  $sdit
     * @return \Illuminate\Http\Response
     */
    public function edit(SDIT $sdit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SDIT  $sdit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SDIT $sdit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SDIT  $sdit
     * @return \Illuminate\Http\Response
     */
    public function destroy(SDIT $sdit)
    {
        //
    }
}
