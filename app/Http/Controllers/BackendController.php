<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Peran;
use App\Models\Peran_en;
use App\Models\Level;
use Illuminate\Support\Facades\Hash;

class BackendController extends Controller
{
    public function user()
    {
        $dataLevel = Level::all();
        $dataPeran = Peran::all();
        $dataUser = User::join('peran_en', 'users.function_en', '=', 'peran_en.id_peran')
            ->join('level', 'level.id_level', '=', 'users.level')
            ->get(['users.*', 'peran_en.*', 'level.*']);
        return view('backend/user', ['dataUser' => $dataUser, 'dataLevel' => $dataLevel, 'dataPeran' => $dataPeran]);
    }
    public function userSimpan(Request $a)
    {
        // $pesan_error = [
        //     'required' => ':attribute harus di isi',
        //     'nim.unique' => "User dengan NIM ini Sudah terdaftar"
        // ];
        // $a->validate([
        //     'nim' => 'required|unique:users',
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required'
        // ], $pesan_error);

        User::create([
            'id_user' => $a->id,
            'name' => $a->nama,
            'password' => Hash::make($a->password),
            'email' => $a->email,
            'hp' => $a->hp,
            'function' => $a->function,
            'function_en' => $a->function,
            'level' => $a->level
        ]);
        //Session::flash('simpan', 'Data Berhasil Disimpan!');
        return redirect('/user');
    }
}