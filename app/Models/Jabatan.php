<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perangkat;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatans';

    protected $fillable = [
        'nama_jabatan',
    ];

    public function Perangkat(){
        return $this->hasMany(Perangkat::class, 'id');
    }
}
