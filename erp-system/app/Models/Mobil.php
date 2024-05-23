<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobils';

    protected $fillable = [
        'nama_mobil', 'merk', 'jenis', 'nopol'
    ];

    // Relationships
    public function pinjamMobil()
    {
        return $this->hasMany(PinjamMobil::class, 'id_mobil');
    }
}
