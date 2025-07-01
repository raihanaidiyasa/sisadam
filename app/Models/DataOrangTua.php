<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOrangTua extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model ini.
     *
     * @var string
     */
    protected $table = 'data_orang_tua';

    /**
     * Primary Key untuk model ini.
     *
     * @var string
     */
    protected $primaryKey = 'data_orang_tua_id';

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
        'data_orang_tua_id',
        'nama_ayah',
        'no_telp_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'no_telp_ibu',
        'pekerjaan_ibu',
        'kategori_penghasilan_id',
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
     * Satu set data orang tua hanya dimiliki oleh satu mahasiswa.
     */
    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'data_orang_tua_id', 'data_orang_tua_id');
    }

    /**
     * Mendefinisikan relasi ke model KategoriPenghasilan.
     */
    public function kategoriPenghasilan()
    {
        return $this->belongsTo(KategoriPenghasilan::class, 'kategori_penghasilan_id');
    }
}
