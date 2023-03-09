<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peran_en extends Model
{
    use HasFactory;
    protected $table = "peran_en";
    protected $primaryKey = 'id_peran';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_peran', 'nm_peran'];
}