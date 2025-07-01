<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPeringatan extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model ini.
     *
     * @var string
     */
    protected $table = 'surat_peringatan';

    /**
     * Primary Key untuk model ini.
     *
     * @var string
     */
    protected $primaryKey = 'sp_id';

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
        'sp_id',
        'nim',
        'tanggal',
        'alasan',
    ];

    /**
     * Atribut yang harus di-cast ke tipe data tertentu.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal' => 'date',
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
     * Satu surat peringatan dimiliki oleh satu mahasiswa.
     */
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }
}
