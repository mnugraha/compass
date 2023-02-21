<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = "nilai";
    protected $primaryKey = 'id_nilai';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_nilai', 'id_struktur', 'id_kompetensi', 'deskripsi'];
}