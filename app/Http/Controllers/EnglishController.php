<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Profile_en;
use App\Models\Nilai_en;
use App\Models\Struktur_en;
use App\Models\Kompetensi_en;
use App\Models\Peran_en;
use App\Models\Level;
use App\Models\User;
use App\Models\Peringkat;


class EnglishController extends Controller
{
    public function dashboard_en()
    {
        return view('dashboard_en');
    }

    public function handbook()
    {
        return view('handbook_en');
    }

    public function video()
    {
        return view('video_en');
    }

    public function profil_en()
    {
        $dataNilai = Nilai_en::all();
        $dataKompetensi = Kompetensi_en::all();
        $dataStruktur = Struktur_en::all();
        $dataLevel = Level::all();
        $dataPeringkat = Peringkat::all();
        $dataUser1 = User::all();
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
            // $kompetensiUser = Profile_en::where('peran', '=', Auth::user()->function)
            //     ->where('level', '=', Auth::user()->level)
            //     ->where('nilai', '!=', null)
            //     ->get();
            $kompetensiUser = Profile_en::where('peran', '=', Auth::user()->function)
                ->where('level', '=', Auth::user()->level)
                ->where('nilai', 'NOT LIKE', '%f')
                ->get();
            $jmlKompetensi = (int)(($kompetensiUser->count()) / 3);
        } else {
            return view('login');
        }
        return view('profile_en', ['dataUser' => $dataUser, 'nilai' => $dataNilai, 'level' => $dataLevel, 'peran' => $dataPeran, 'profile' => $dataProfile, 'kompetensi' => $dataKompetensi, 'struktur' => $dataStruktur, 'jmlKompetensi' => $jmlKompetensi, 'dataPeringkat' => $dataPeringkat, 'dataUser1' => $dataUser1]);
    }

    public function A_en()
    {
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'A1')
            ->orWhere('id_kompetensi', '=', 'A2')
            ->orWhere('id_kompetensi', '=', 'A3')
            ->get();
        $dataKompetensi1 = Kompetensi_en::where('id_kompetensi', '=', 'A1')->first();
        return view('A_en', ['kompetensi' => $dataKompetensi, 'kompetensi1' => $dataKompetensi1]);
    }

    public function B_en()
    {
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'B1')
            ->orWhere('id_kompetensi', '=', 'B2')
            ->orWhere('id_kompetensi', '=', 'B3')
            ->get();
        $dataKompetensi1 = Kompetensi_en::where('id_kompetensi', '=', 'B1')->first();
        return view('B_en', ['kompetensi' => $dataKompetensi, 'kompetensi1' => $dataKompetensi1]);
    }

    public function C_en()
    {
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'C1')
            ->orWhere('id_kompetensi', '=', 'C2')
            ->orWhere('id_kompetensi', '=', 'C3')
            ->get();
        $dataKompetensi1 = Kompetensi_en::where('id_kompetensi', '=', 'C1')->first();
        return view('C_en', ['kompetensi' => $dataKompetensi, 'kompetensi1' => $dataKompetensi1]);
    }

    public function D_en()
    {
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'D1')
            ->orWhere('id_kompetensi', '=', 'D2')
            ->orWhere('id_kompetensi', '=', 'D3')
            ->get();
        $dataKompetensi1 = Kompetensi_en::where('id_kompetensi', '=', 'D1')->first();
        return view('D_en', ['kompetensi' => $dataKompetensi, 'kompetensi1' => $dataKompetensi1]);
    }

    public function A1_en()
    {
        $a1 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A11')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a2 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A12')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a3 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A13')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $A11 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A11')->first();
        $A12 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A12')->first();
        $A13 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A13')->first();
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'A1')->first();
        return view('A1_en', ['kompetensi' => $dataKompetensi, 'jointabel1' => $a1, 'jointabel2' => $a2, 'jointabel3' => $a3, 'A11' => $A11, 'A12' => $A12, 'A13' => $A13]);
    }

    public function A2_en()
    {
        $a1 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A21')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a2 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A22')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a3 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A23')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $A11 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A21')->first();
        $A12 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A22')->first();
        $A13 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A23')->first();
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'A2')->first();
        return view('A1_en', ['kompetensi' => $dataKompetensi, 'jointabel1' => $a1, 'jointabel2' => $a2, 'jointabel3' => $a3, 'A11' => $A11, 'A12' => $A12, 'A13' => $A13]);
    }
    public function A3_en()
    {
        $a1 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A31')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a2 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A32')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a3 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A33')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $A11 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A31')->first();
        $A12 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A32')->first();
        $A13 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'A33')->first();
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'A3')->first();
        return view('A1_en', ['kompetensi' => $dataKompetensi, 'jointabel1' => $a1, 'jointabel2' => $a2, 'jointabel3' => $a3, 'A11' => $A11, 'A12' => $A12, 'A13' => $A13]);
    }

    public function B1_en()
    {
        $a1 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B11')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a2 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B12')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a3 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B13')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $A11 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B11')->first();
        $A12 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B12')->first();
        $A13 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B13')->first();
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'B1')->first();
        return view('B1_en', ['kompetensi' => $dataKompetensi, 'jointabel1' => $a1, 'jointabel2' => $a2, 'jointabel3' => $a3, 'A11' => $A11, 'A12' => $A12, 'A13' => $A13]);
    }

    public function B2_en()
    {
        $a1 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B21')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a2 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B22')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a3 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B23')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $A11 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B21')->first();
        $A12 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B22')->first();
        $A13 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B23')->first();
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'B2')->first();
        return view('B1_en', ['kompetensi' => $dataKompetensi, 'jointabel1' => $a1, 'jointabel2' => $a2, 'jointabel3' => $a3, 'A11' => $A11, 'A12' => $A12, 'A13' => $A13]);
    }
    public function B3_en()
    {
        $a1 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B31')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a2 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B32')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a3 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B33')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $A11 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B31')->first();
        $A12 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B32')->first();
        $A13 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'B33')->first();
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'B3')->first();
        return view('B1_en', ['kompetensi' => $dataKompetensi, 'jointabel1' => $a1, 'jointabel2' => $a2, 'jointabel3' => $a3, 'A11' => $A11, 'A12' => $A12, 'A13' => $A13]);
    }

    public function C1_en()
    {
        $a1 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C11')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a2 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C12')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a3 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C13')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $A11 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C11')->first();
        $A12 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C12')->first();
        $A13 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C13')->first();
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'C1')->first();
        return view('C1_en', ['kompetensi' => $dataKompetensi, 'jointabel1' => $a1, 'jointabel2' => $a2, 'jointabel3' => $a3, 'A11' => $A11, 'A12' => $A12, 'A13' => $A13]);
    }

    public function C2_en()
    {
        $a1 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C21')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a2 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C22')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a3 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C23')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $A11 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C21')->first();
        $A12 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C22')->first();
        $A13 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C23')->first();
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'C2')->first();
        return view('C1_en', ['kompetensi' => $dataKompetensi, 'jointabel1' => $a1, 'jointabel2' => $a2, 'jointabel3' => $a3, 'A11' => $A11, 'A12' => $A12, 'A13' => $A13]);
    }

    public function C3_en()
    {
        $a1 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C31')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a2 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C32')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a3 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C33')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $A11 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C31')->first();
        $A12 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C32')->first();
        $A13 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'C33')->first();
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'C3')->first();
        return view('C1_en', ['kompetensi' => $dataKompetensi, 'jointabel1' => $a1, 'jointabel2' => $a2, 'jointabel3' => $a3, 'A11' => $A11, 'A12' => $A12, 'A13' => $A13]);
    }

    public function D1_en()
    {
        $a1 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D11')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a2 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D12')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a3 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D13')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $A11 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D11')->first();
        $A12 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D12')->first();
        $A13 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D13')->first();
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'D1')->first();
        return view('D1_en', ['kompetensi' => $dataKompetensi, 'jointabel1' => $a1, 'jointabel2' => $a2, 'jointabel3' => $a3, 'A11' => $A11, 'A12' => $A12, 'A13' => $A13]);
    }

    public function D2_en()
    {
        $a1 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D21')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a2 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D22')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a3 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D23')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $A11 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D21')->first();
        $A12 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D22')->first();
        $A13 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D23')->first();
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'D2')->first();
        return view('D1_en', ['kompetensi' => $dataKompetensi, 'jointabel1' => $a1, 'jointabel2' => $a2, 'jointabel3' => $a3, 'A11' => $A11, 'A12' => $A12, 'A13' => $A13]);
    }

    public function D3_en()
    {
        $a1 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D31')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a2 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D32')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $a3 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D33')
            ->get(['nilai_en.*', 'struktur_en.*', 'kompetensi_en.*']);
        $A11 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D31')->first();
        $A12 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D32')->first();
        $A13 = Nilai_en::join('struktur_en', 'struktur_en.id_struktur', '=', 'nilai_en.id_struktur')
            ->join('kompetensi_en', 'kompetensi_en.id_kompetensi', '=', 'nilai_en.id_kompetensi')
            ->where('nilai_en.id_struktur', '=', 'D33')->first();
        $dataKompetensi = Kompetensi_en::where('id_kompetensi', '=', 'D3')->first();
        return view('D1_en', ['kompetensi' => $dataKompetensi, 'jointabel1' => $a1, 'jointabel2' => $a2, 'jointabel3' => $a3, 'A11' => $A11, 'A12' => $A12, 'A13' => $A13]);
    }
    public function kompetensi_en()
    {

        $dataKompetensiA = Kompetensi_en::where('id_kompetensi', '=', 'A1')
            ->orWhere('id_kompetensi', '=', 'A2')
            ->orWhere('id_kompetensi', '=', 'A3')
            ->get();

        $dataKompetensiB = Kompetensi_en::where('id_kompetensi', '=', 'B1')
            ->orWhere('id_kompetensi', '=', 'B2')
            ->orWhere('id_kompetensi', '=', 'B3')
            ->get();

        $dataKompetensiC = Kompetensi_en::where('id_kompetensi', '=', 'C1')
            ->orWhere('id_kompetensi', '=', 'C2')
            ->orWhere('id_kompetensi', '=', 'C3')
            ->get();

        $dataKompetensiD = Kompetensi_en::where('id_kompetensi', '=', 'D1')
            ->orWhere('id_kompetensi', '=', 'D2')
            ->orWhere('id_kompetensi', '=', 'D3')
            ->get();
        return view('kompetensi_en', ['kompetensiA' => $dataKompetensiA, 'kompetensiB' => $dataKompetensiB, 'kompetensiC' => $dataKompetensiC, 'kompetensiD' => $dataKompetensiD]);
    }

    public function updatePass($x, Request $a)
    {
        User::where('id_user', $x)->update([
            'password' => Hash::make($a->password)
        ]);
        return redirect('/profile-en');
    }

    public function faq()
    {
        return view('faq_en');
    }
}
