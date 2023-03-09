<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_en extends Model
{
    use HasFactory;
    protected $table = "profile_en";
    protected $primaryKey = 'id_profile';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_profile', 'peran', 'level', 'nilai'];
}