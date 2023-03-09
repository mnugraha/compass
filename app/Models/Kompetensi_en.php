<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetensi_en extends Model
{
    use HasFactory;
    protected $table = "kompetensi_en";
    protected $primaryKey = 'id_kompetensi';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_kompetensi', 'nm_kompetensi', 'value', 'definisi'];
}