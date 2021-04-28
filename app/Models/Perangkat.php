<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jabatan;

class Perangkat extends Model
{
    use HasFactory;
    protected $table = 'perangkats';

    public function Jabatan(){
        return $this->belongsTo(Jabatan::class, 'id');
    }

    public function MasaJabatan(){
        return $this->hasOne(MasaJabatan::class, 'id');
    }
}
