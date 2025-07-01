<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Mahasiswa extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model ini.
     * @var string
     */
    protected $table = 'mahasiswa'; // Sesuaikan jika nama tabel Anda berbeda

    /**
     * Primary Key untuk model ini.
     * @var string
     */
    protected $primaryKey = 'nim';

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
        'nim',
        'nama',
        'jenis_kelamin',
        'jalur_masuk_id',
        'tahun_ajar_id',
        'jurusan_id',
        'alamat_lengkap',
        'provinsi',
        'no_telp',
        'email',
        'data_orang_tua_id',
        'status_ukt',
        'ipk',
        'semester_berjalan',
        'status_mahasiswa_id',
        'sks_ditempuh',
        'sks_semester_ini',
    ];

    /**
     * Memberitahu Laravel untuk tidak mengelola kolom created_at dan updated_at
     * karena tidak ada di tabel Anda.
     * @var bool
     */
    public $timestamps = false;

    /**
     * Atribut yang harus di-cast ke tipe data tertentu.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'jenis_kelamin' => 'integer',
        'status_ukt' => 'boolean', // tinyint(1) sering digunakan sebagai boolean
        'ipk' => 'float',
        'semester_berjalan' => 'integer',
        'sks_ditempuh' => 'integer',
        'sks_semester_ini' => 'integer',
    ];

    public function jurusan() {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }

    public function tahunAjar() {
        return $this->belongsTo(TahunAjar::class, 'tahun_ajar_id');
    }

    public function statusMahasiswa() {
        return $this->belongsTo(StatusMahasiswa::class, 'status_mahasiswa_id');
    }

    public function jalurMasuk() { 
        return $this->belongsTo(JalurMasuk::class, 'jalur_masuk_id'); 
    }

    public function dataOrangTua() { 
        return $this->belongsTo(DataOrangTua::class, 'data_orang_tua_id'); 
    }

    public function suratPeringatans() { 
        return $this->hasMany(SuratPeringatan::class, 'nim', 'nim'); 
    }

    public function beasiswas() { 
        return $this->hasMany(Beasiswa::class, 'nim', 'nim'); 
    }

    /**
     * Accessor untuk mengubah nilai jenis_kelamin (1 atau 2) menjadi teks.
     * Kita akan memanggilnya di view sebagai $mahasiswa->jenis_kelamin_text
     */
    public function getJenisKelaminTextAttribute()
    {
        if ($this->jenis_kelamin == 1) {
            return 'Laki-laki';
        } elseif ($this->jenis_kelamin == 0) {
            return 'Perempuan';
        }
        return 'Tidak Diketahui';
    }

    public function getStatusUktTextAttribute() {
        return $this->status_ukt ? 'Lunas' : 'Belum Lunas';
    }
}
