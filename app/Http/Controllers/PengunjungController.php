<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class pengunjungController extends Controller
{
    public function index(){
        //mengambil data dari tabel pengunjung
      $pengunjung = DB::table('pengunjung_tabel')->get();
      //kirim datanya ke view
      return view ('index',['pengunjung'=>$pengunjung]);
    }

    public function tambah(){
        //panggil dulu view tambahnya
        return view ('tambah');
    }

    public function store (Request $request){
        //Masukkan data kedalam tabel pengunjung
        DB::table('pengunjung_tabel')->insert ([
            'Nama' =>$request->Nama,
            'Umur' =>$request->Umur,
            'Alamat' =>$request->Alamat
        ]);
        return redirect ('/pengunjung');
    }

    public function edit ($id){
        //Ambil data dari database sesuai ID yg dipilih
        $pengunjung = DB::table('pengunjung_tabel')->where('id',$id)->get();
        //Lalu lempar data ke view edit.blade.php
        return view('edit',['pengunjung' =>$pengunjung]);
    }
    public function update(Request $request){
        DB::table('pengunjung_tabel')->where('id',$request->id)->update([
            'Nama'=> $request->Nama,
            'Umur'=> $request->Umur,
            'Alamat'=> $request->Alamat,
            ]);
            return redirect('/pengunjung');
    }

    public function hapus ($id){
        //menghapus data di dalam database
        DB::table('pengunjung_tabel')->where('id',$id)->delete();
        return redirect('/pengunjung');
    }

   }