<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    use HasFactory;
    protected $table = "peran";
    protected $primaryKey = 'id_peran';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_peran', 'nm_peran'];
}