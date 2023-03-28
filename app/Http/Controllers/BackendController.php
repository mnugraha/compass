<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Peran;
use App\Models\Peran_en;
use App\Models\Level;

class BackendController extends Controller
{
    public function user()
    {
        // $dataUser = User::all();
        $dataUser = User::join('peran_en', 'users.function_en', '=', 'peran_en.id_peran')
            ->join('level', 'level.id_level', '=', 'users.level')
            ->get(['users.*', 'peran_en.*', 'level.*']);
        return view('backend/user', ['dataUser' => $dataUser]);
    }
}
