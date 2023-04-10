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
        $dataPeran = Peran_en::all();
        $dataUser = User::join('peran_en', 'users.function_en', '=', 'peran_en.id_peran')
            ->join('level', 'level.id_level', '=', 'users.level')
            ->get(['users.*', 'peran_en.*', 'level.*']);
        return view('backend/user', ['dataUser' => $dataUser, 'dataLevel' => $dataLevel, 'dataPeran' => $dataPeran]);
    }
    public function userSimpan(Request $a)
    {
        $pesan_error = [
            'required' => ':attribute harus di isi',
            'unique' => "User dengan ID ini Sudah terdaftar"
        ];
        $a->validate([
            'id_user' => 'required|unique:users',
            'nama' => 'required',
            'password' => 'required',
            'function' => 'required',
            'level' => 'required'
        ], $pesan_error);

        User::create([
            'id_user' => $a->id_user,
            'name' => $a->nama,
            'password' => Hash::make($a->password),
            'departemen' => $a->departemen,
            'hp' => $a->hp,
            'function' => $a->function,
            'function_en' => $a->function,
            'level' => $a->level
        ]);
        //Session::flash('simpan', 'Data Berhasil Disimpan!');
        return redirect('/user');
    }

    public function userUpdate($x, Request $a)
    {
        User::where('id_user', $x)->update([
            'name' => $a->nama,
            'password' => Hash::make($a->password),
            'departemen' => $a->departemen,
            'hp' => $a->hp,
            'function' => $a->function,
            'function_en' => $a->function,
            'level' => $a->level
        ]);
        //Session::flash('update', 'Data Berhasil Diupdate!');
        return redirect('/user');
    }

    public function userDelete($x)
    {
        $data = User::find($x);
        $data->delete();
        //Session::flash('hapus', 'Data Berhasil Didelete!');
        return redirect('/user');
    }

    public function updatePass($x, Request $a)
    {
        User::where('id_user', $x)->update([
            'password' => Hash::make($a->password)
        ]);
        //Session::flash('update', 'Data Berhasil Diupdate!');
        return redirect('/user');
    }
}
