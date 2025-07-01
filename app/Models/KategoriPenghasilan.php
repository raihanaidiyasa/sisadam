<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPenghasilan extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model ini.
     *
     * @var string
     */
    protected $table = 'kategori_penghasilan';

    /**
     * Primary Key untuk model ini.
     *
     * @var string
     */
    protected $primaryKey = 'kategori_penghasilan_id';

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
        'kategori_penghasilan_id',
        'nama_kategori',
    ];

    /**
     * Memberitahu Laravel untuk tidak mengelola kolom created_at dan updated_at
     * karena tidak ada di tabel Anda.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Mendefinisikan relasi ke model DataOrangTua.
     * Satu kategori penghasilan bisa dimiliki oleh banyak data orang tua.
     */
    public function dataOrangTua()
    {
        return $this->hasMany(DataOrangTua::class, 'kategori_penghasilan_id', 'kategori_penghasilan_id');
    }
}
