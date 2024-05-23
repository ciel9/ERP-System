<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamMobil extends Model
{
    protected $table = 'pinjam_mobil';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user'); // Specify the foreign key
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil'); // Specify the foreign key
    }

    public static function getData()
    {
        $pinjamMobils = PinjamMobil::all();
        return $pinjamMobils;
    }
}
