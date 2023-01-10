<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function(){
    $dosens = ["Ridwan","Slamet","Sri","Nina","John Lemon","Wati","Ahmad","Jajang","Efendi","Junaedi El Mundo"];
    $nips = ["01001","01002","01003","01004","01005","01006","01007","01008","01009","01010"];
    return view('dosen.index')->with('dosens', $dosens)->with('nip',$nips);
});

Route::get('/mahasiswa', function () {
    $mahasiswas = ["Mamat","Adang","Asep senar","Giovani","ujang","Amar","icha","Mia","Tono bokir","Jamal"];
    $nims = ["18101","18102","18103","18104","181045","18106","18107","18108","18109","18110"];
    return view('mahasiswa.index')->with('mahasiswas', $mahasiswas)->with('nim',$nims);
    
});

Route::get('/matkul', function(){
    $matkul = ["Matematika Diskrit","Framework Pemrograman Web", "Pemrograman berbasis mobile", "keamanan sistem","metodelogi penelitian","Database Multimedia","teknologi seluler","Uji statistik","Basis Data","Pemrograman Berorientasi Obyek"];
    $sks = ["3","3","3","3","2","3","3","2","3","3"];
    return view('matkul.index')->with('matkuls', $matkul)->with('sks',$sks);
});
