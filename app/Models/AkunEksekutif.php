<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class AkunEksekutif extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'akun_eksekutif';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'username',
        'password',
        'nama_lengkap',
        'terakhir_login',
    ];

 
    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'password' => 'hashed',
        'terakhir_login' => 'datetime',
    ];

    public $timestamps = false;
}
