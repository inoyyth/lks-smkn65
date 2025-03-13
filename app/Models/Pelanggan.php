<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelanggan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'tgl_lahir',
        'telp',
        'alamat'
    ];
}