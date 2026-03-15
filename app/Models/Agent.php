<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = 'agents';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'usia',
        'nomor_telepon',
        'email',
        'province_id',
        'regency_id'
    ];
}