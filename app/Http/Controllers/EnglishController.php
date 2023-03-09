<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Profile_en;
use App\Models\Nilai_en;
use App\Models\Struktur_en;
use App\Models\Kompetensi_en;
use App\Models\Peran_en;
use App\Models\Level;
use App\Models\User;


class EnglishController extends Controller
{
    public function dashboard_en()
    {
        return view('dashboard_en');
    }
    public function profil_en()
    {
        $dataNilai = Nilai_en::all();
        $dataKompetensi = Kompetensi_en::all();
        $dataStruktur = Struktur_en::all();
        $dataLevel = Level::all();
        $dataPeran = Peran_en::all();
        if (isset(Auth::user()->id_user)) {
            $dataProfile = Profile_en::join('nilai_en', 'profile_en.nilai', '=', 'nilai_en.id_nilai')
                ->join('peran_en', 'peran_en.id_peran', '=', 'profile_en.peran')
                ->join('level', 'level.id_level', '=', 'profile_en.level')
                ->where('profile_en.peran', '=', Auth::user()->function_en)
                ->where('profile_en.level', '=', Auth::user()->level)
                ->orderBy('nilai', 'asc')
                ->get(['nilai_en.*', 'profile_en.*', 'peran_en.*', 'level.*']);

            $dataUser = User::join('peran_en', 'peran_en.id_peran', '=', 'users.function_en')
                ->join('level', 'level.id_level', '=', 'users.level')
                ->where('users.id_user', '=', Auth::user()->id_user)
                ->get(['users.*', 'level.*', 'peran_en.*'])->first();
        } else {
            return view('login');
        }
        return view('profile_en', ['dataUser' => $dataUser, 'nilai' => $dataNilai, 'level' => $dataLevel, 'peran' => $dataPeran, 'profile' => $dataProfile, 'kompetensi' => $dataKompetensi, 'struktur' => $dataStruktur]);
    }
}