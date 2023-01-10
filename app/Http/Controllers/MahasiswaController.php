<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insert(){

        // RAW
        $sql = DB::insert("INSERT INTO mahasiswas (npm,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('1810631170041', 'Fathan Pebrilliestyo Ganteng','laki-laki','Jl melati kebon kembang','London Selatan','2000-08-01','.png',now(),now())");
        dump($sql);

        // SB
        $sql1 = DB::table('mahasiswas')->insert(
            [
                'npm' => '1810631170041',
                'nama' => 'Rizky Aditya',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'London Selatan',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '2000-08-01',
                'photo' => '',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::create(
            [
                'npm' => '18106311700041',
                'nama' => 'Rizky Aditya',
                'jenis_kelamin' => 'London Selatan',
                'alamat' => 'Cikampek Timur',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '2000-08-01',
                'photo' => '',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dd($sql2);
        return "Data berhasil diproses";
    }

    public function select(){

        // RAW
        $sql = DB::select("SELECT * FROM mahasiswas");
        dd($sql);

        // SB
        $sql2 = DB::table('mahasiswas')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Mahasiswa::all();
        dd($sql3);
    }

    public function update(){

        //RAW
        $sql = DB::update("UPDATE mahasiswas SET alamat='JL.Teluk Pucung',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('mahasiswas')
        ->where('id','1')
        ->update(
            [
                'alamat' => 'Jl. Melati KebonKembang',
                'updated_at' => now()
            ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Mahasiswa::where('id','1')->first()->update([
            'alamat' => 'Jl. Melati KebonKembang',
            'updated_at' => now()
        ]);
        dd($sql2);

    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM mahasiswas WHERE npm=?",['1810631170041']);
        dd($sql);

        //SB
        $sql1 = DB::table('mahasiswas')
        ->where('npm','1810631170041')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::where('mahasiswas','1810631170041')->delete();
        dd($sql2);
    }

}
