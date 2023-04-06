<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peringkat extends Model
{
    use HasFactory;
    protected $table = "peringkat";
    protected $primaryKey = 'id_peringkat';
    public $timestamps = false;
    protected $fillable = ['id_peringkat', 'id_peran', 'id_level', 'id_kompetensi', 'score'];
}