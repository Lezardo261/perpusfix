<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Profilecontroller extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('pengaturan.profile', compact('user'));
    }

    public function showrak(){
        $rak = DB::table('nomorrak')->get();
        return view('pengaturan.rak', compact('rak'));
    }
    public function tambahrak(){
        return view('pengaturan.tambahrak');
    }
    public function tambahstore(Request $request){
        $nomorrak = $request->input('nomor-rak');

        DB::table('nomorrak')->insert([
            'nomorrak' => $nomorrak
        ]);

        return redirect()->back()->with('success', 'Nomor rak berhasil ditambahkan');
    }
    public function showrakedit($id){
        $update = DB::table('nomorrak')->where('id', $id)->first();
        return view('pengaturan.rakedit', compact('update'));
    }

    public function destroy($id){
    
        $rak =  DB::table('nomorrak')->where('id', $id)->delete();
        return redirect()->back();
    }

    // subjek
    public function showsubjek(){
        $subjek = DB::table('subjek')->get();
        return view('pengaturan.subjek', compact('subjek'));
    }
    public function tambahsub(){
        return view('pengaturan.tambahrak');
    }
    public function subjekstore(Request $request){
        $namasubjek = $request->input('subjek');

        DB::table('subjek')->insert([
            'nama_subjek' => $namasubjek
        ]);

        return redirect()->back()->with('success', 'Nomor rak berhasil ditambahkan');
    }
    public function destroysub($id){
    
        $rak =  DB::table('subjek')->where('id', $id)->delete();
        return redirect()->back();
    }
}
