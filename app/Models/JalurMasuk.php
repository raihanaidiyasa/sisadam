<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JalurMasuk extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model ini.
     *
     * @var string
     */
    protected $table = 'jalur_masuk';

    /**
     * Primary Key untuk model ini.
     *
     * @var string
     */
    protected $primaryKey = 'jalur_masuk_id';

    /**
     * Menunjukkan bahwa ID model tidak bertambah otomatis (non-incrementing).
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Tipe data dari primary key.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Atribut yang dapat diisi secara massal (mass assignable).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'jalur_masuk_id',
        'nama_jalur',
    ];

    /**
     * Memberitahu Laravel untuk tidak mengelola kolom created_at dan updated_at
     * karena tidak ada di tabel Anda.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Mendefinisikan relasi ke model Mahasiswa.
     * Satu jalur masuk bisa dimiliki oleh banyak mahasiswa.
     */
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'jalur_masuk_id', 'jalur_masuk_id');
    }
}
