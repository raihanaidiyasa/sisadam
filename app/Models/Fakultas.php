<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model ini.
     * @var string
     */
    protected $table = 'fakultas'; // Sesuaikan jika nama tabel Anda berbeda

    /**
     * Primary Key untuk model ini.
     * @var string
     */
    protected $primaryKey = 'fakultas_id';

    /**
     * Menunjukkan bahwa ID model tidak bertambah otomatis (non-incrementing).
     * @var bool
     */
    public $incrementing = false;

    /**
     * Tipe data dari primary key.
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Atribut yang dapat diisi secara massal (mass assignable).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fakultas_id',
        'nama_fakultas',
    ];

    /**
     * Memberitahu Laravel untuk tidak mengelola kolom created_at dan updated_at
     * karena tidak ada di tabel Anda.
     * @var bool
     */
    public $timestamps = false;

    /**
     * Mendefinisikan relasi ke model Jurusan.
     * Satu fakultas bisa memiliki banyak jurusan.
     */
    public function jurusans()
    {
        return $this->hasMany(Jurusan::class, 'fakultas_id', 'fakultas_id');
    }
}
