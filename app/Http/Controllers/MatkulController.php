<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matkul;


class MatkulController extends Controller
{
    public function insert(){

        // RAW
        $sql = DB::insert("INSERT INTO Matkul (kode_mk,nama_mk,created_at,updated_at) VALUES ('FW01', 'Framework',now(),now())");
        dump($sql);

        // SB
        $sql1 = DB::table('Matkul')->insert(
            [
                'kode_mk' => 'KS01',
                'nama_mk' => 'Kalkulus',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($sql1);

        //ELOQUENT
        $sql2 = Matkul::create(
            [
                'kode_mk' => 'KS01',
                'nama_mk' => 'Kalkulus',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dd($sql2);
        return "Data berhasil diproses";
    }

    public function select(){

        // RAW
        $sql = DB::select("SELECT * FROM matakuliahs");
        dd($sql);

        // SB
        $sql2 = DB::table('Matkul')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Matakuliah::all();
        dd($sql3);
    }

    public function update(){

        //RAW
        $sql = DB::update("UPDATE Matkul SET nama_mk='Pemrograman Framework',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('Matkul')
        ->where('id','1')
        ->update(
            [
                'nama_mk' => 'Kalkulus 1',
                'updated_at' => now()
            ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Matakuliah::where('id','1')->first()->update([
            'nama_mk' => 'Kalkulus 1',
            'updated_at' => now()
        ]);
        dd($sql2);

    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM Matkul WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('Matkul')
        ->where('id','1')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Matkul::where('id','1')->delete();
        dd($sql2);
    }}
