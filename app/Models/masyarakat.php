<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
    use HasFactory;

    protected $table = 'masyarakats';

    protected $primaryKey = 'nik';

    public $incrementing = false;

    protected $fillable = [
        'nik',
        'nama',
        'username',
        'password',
        'telp',
        'alamat',
    ];

    protected $hidden = [
        'password',
    ];
    protected $keyType = 'string'; // Karena NIK adalah string
}

