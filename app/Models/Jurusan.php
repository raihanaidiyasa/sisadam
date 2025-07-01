<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model ini.
     * @var string
     */
    protected $table = 'jurusan'; // Sesuaikan jika nama tabel Anda berbeda, misal 'jurusans'

    /**
     * Primary Key untuk model ini.
     * @var string
     */
    protected $primaryKey = 'jurusan_id';

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
        'jurusan_id',
        'nama_jurusan',
        'fakultas_id',
    ];

    /**
     * Memberitahu Laravel untuk tidak mengelola kolom created_at dan updated_at
     * karena tidak ada di tabel Anda.
     * @var bool
     */
    public $timestamps = false;

    /**
     * Mendefinisikan relasi ke model Fakultas.
     * Ini akan berguna jika Anda ingin menampilkan nama fakultas.
     */
    public function fakultas()
    {
        // Asumsi: foreign key di tabel jurusan adalah 'fakultas_id'
        // dan primary key di tabel fakultas adalah 'fakultas_id'
        // Pastikan model 'Fakultas' ada di App\Models\Fakultas
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }

    /**
     * Mendefinisikan relasi ke model Mahasiswa.
     * Satu jurusan bisa memiliki banyak mahasiswa.
     */
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'jurusan_id', 'jurusan_id');
    }
}
