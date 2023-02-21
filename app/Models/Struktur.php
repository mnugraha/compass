<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    use HasFactory;
    protected $table = "struktur";
    protected $primaryKey = 'id_struktur';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_struktur', 'nm_struktur', 'id_kompetensi'];
}