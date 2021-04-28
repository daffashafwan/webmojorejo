<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perangkat;

class MasaJabatan extends Model
{
    use HasFactory;
    protected $table = 'masa_jabatans';
    protected $guarded = [];

    protected $fillable = [
        'tahun_mulai',
        'tahun_selesai',
        'status',
    ];

    public function Perangkat(){
        return $this->hasMany(Perangkat::class, 'id');
    }
}
