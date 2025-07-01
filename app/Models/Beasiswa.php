<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model ini.
     *
     * @var string
     */
    protected $table = 'beasiswa';

    /**
     * Primary Key untuk model ini.
     *
     * @var string
     */
    protected $primaryKey = 'beasiswa_data_id';

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
        'beasiswa_data_id',
        'nama_beasiswa',
        'nim',
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
     * Satu data beasiswa dimiliki oleh satu mahasiswa.
     */
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }
}
