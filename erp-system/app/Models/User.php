<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table = 'user';

    protected $fillable = [
        'nama_user', 'alamat', 'tingkat_kekayaan'
    ];

    // Relationships
    public function pinjamMobil()
    {
        return $this->hasMany(PinjamMobil::class, 'id_user');
    }

    public static function getData()
    {
        $user = User::all();
        return $user;
    }
}
