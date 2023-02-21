<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    use HasFactory;
    protected $table = "kompetensi";
    protected $primaryKey = 'id_kompetensi';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_kompetensi', 'nm_kompetensi', 'value', 'definisi'];
}