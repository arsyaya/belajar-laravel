<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //untuk mengambil data
        $dataKelas = DB::table('kelas')->get();
         //untuk menampilkan data
        return view('kelas.index', compact('dataKelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $query = DB::table('kelas')->insert([
            "nama_kelas"  => $request["nama_kelas"],
            "jurusan"  => $request["jurusan"],
      
        ]);

        return redirect('/class');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $showKelasById = DB::table('kelas')->where('id', $id)->first();
        // diatas sama dengan SELECT * FROM siswa WHERE id = $id
        return view('kelas.show', compact('showKelasById'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $showKelasById = DB::table('kelas')->where('id', $id)->first();
        // diatas sama dengan SELECT * FROM siswa WHERE id = $id
        return view('kelas.edit', compact('showKelasById'));
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
        //
        $query = DB::table('kelas')
        ->where('id', $id)
        ->update([ 
            "nama_kelas"                  => $request["nama_kelas"],
            "jurusan"                     => $request["jurusan"],
            
             ]);

        return redirect('/class')->with('succes','Data telah disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $query = DB::table('kelas')->where('id', $id)->delete();
        return redirect('/class');
    }
}
