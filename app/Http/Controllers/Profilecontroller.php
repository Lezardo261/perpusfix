<?php

namespace App\Http\Controllers;

use App\Models\bentukkarya;
use App\Models\matpel;
use App\Models\nomorrak;
use App\Models\subjek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Profilecontroller extends Controller
{
    public function index(){
        return view('pengaturan.profile');
    }
    public function ubahinfo(){
        return view('pengaturan.ubahinfo');
    }
    public function ubahpw(){
        return view('pengaturan.ubahpw');
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
    public function showrakeditstore(Request $request, $id){
        $data = [
            'nomorrak' => $request->nomorrakedit
        ];
        nomorrak::where('id', $id)->update($data);
        return redirect()->back();
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
        return view('pengaturan.tambahsub');
    }
    public function subjekstore(Request $request){
        $namasubjek = $request->input('subjek');

        DB::table('subjek')->insert([
            'nama_subjek' => $namasubjek
        ]);

        return redirect()->back()->with('success', 'Nomor rak berhasil ditambahkan');
    }
    public function subjekedit($id){
        $subjek = DB::table('subjek')->where('id', $id)->first();
        return view('pengaturan.subjekedit', compact('subjek'));
    }
    public function subjekeditstore(Request $request, $id){
        $data = [
            'nama_subjek' => $request->subjek
        ];
        subjek::where('id', $id)->update($data);
        return redirect()->back();

    }
    public function destroysub($id){
    
        $rak =  DB::table('subjek')->where('id', $id)->delete();
        return redirect()->back();
    }

    // karya
    public function showkarya(){
        $karya = DB::table('bentukkaryas')->get();
        return view('pengaturan.karya', compact('karya'));
    }

    public function tambahkarya(){
        return view('pengaturan.tambahkarya');
    }

    public function karyastore(Request $request){
        $karya = $request->input('bentuk_karya');

        DB::table('bentukkaryas')->insert([
            'bentuk_karya' => $karya
        ]);

        return redirect()->back();
    }

    public function karyaedit($id){
        $karya = DB::table('bentukkaryas')->where('id', $id)->first();
        return view('pengaturan.karyaedit', compact('karya'));
    }

    public function karyaeditstore(Request $request, $id){
        $data = [
            'bentuk_karya' => $request->karya_bentuk,
        ];
        bentukkarya::where('id', $id)->update($data);
        return redirect()->back();

    }
    public function destroykarya($id){
        $karya =  DB::table('bentukkaryas')->where('id', $id)->delete();
        return redirect()->back();
    }

    // matpel
    public function showmatpel(){
        $matpel = DB::table('matpels')->get();
        return view('pengaturan.matpel', compact('matpel'));
    }
    public function tambahmatpel(){
        return view('pengaturan.tambahmatpel');
    }
    public function matpelstore(Request $request){
        $matpel = $request->input('matpel');

        DB::table('matpels')->insert([
            'matapelajaran' => $matpel
        ]);

        return redirect()->back();
    }
    public function matpeledit($id){
        $matpel = DB::table('matpels')->where('id', $id)->first();
        return view('pengaturan.matpeledit', compact('matpel'));
    }
    public function matpeleditstore(Request $request, $id){
        $data = [
            'matapelajaran' => $request->matpel,
        ];
        matpel::where('id', $id)->update($data);
        return redirect()->back();
    } 

    public function destroymatpels($id){
        DB::table('matpels')->where('id', $id)->delete();
        return redirect()->back();
    }


    // search

    public function searchrak(Request $request){
        $search = $request->input('searchrak');
        $rak = nomorrak::where('nomorrak', 'LIKE', "%{$search}%")->get();
        return view('pengaturan.rak', compact('rak'));
    }
    public function searchsubjek(Request $request){
        $search = $request->input('searchsubjek');
        $subjek = subjek::where('nama_subjek', 'LIKE', "%{$search}%")->get();
        return view('pengaturan.subjek', compact('subjek'));
    }
    public function searchkarya(Request $request){
        $search = $request->input('searchkarya');
        $karya = bentukkarya::where('bentuk_karya', 'LIKE', "%{$search}%")->get();
        return view('pengaturan.karya', compact('karya'));
    }
    public function searchmatpel(Request $request){
        $search = $request->input('searchmatpel');
        $matpel = matpel::where('matapelajaran', 'LIKE', "%{$search}%")->get();
        return view('pengaturan.matpel', compact('matpel'));
    }
}
