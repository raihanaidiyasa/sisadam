<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjar extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tahun_ajar'; // Sesuaikan jika nama tabel Anda berbeda

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'tahun_ajar_id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tahun_ajar_id',
        'tahun_ajar',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the students for the academic year.
     */
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'tahun_ajar_id', 'tahun_ajar_id');
    }
}
