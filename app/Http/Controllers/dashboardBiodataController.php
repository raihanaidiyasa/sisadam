<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa; // Impor model Mahasiswa

class dashboardBiodataController extends Controller
{
    /**
     * Menampilkan biodata mahasiswa yang spesifik.
     * Kita menggunakan Route Model Binding di sini. Laravel akan otomatis
     * mencari Mahasiswa berdasarkan 'nim' yang ada di URL.
     */
    public function dashboardBiodata($nim) 
    {
        // Cari mahasiswa berdasarkan NIM. Jika tidak ditemukan, akan menampilkan halaman 404.
        // Kita juga memuat relasi yang dibutuhkan untuk efisiensi.
        $mahasiswa = Mahasiswa::with([
            'jurusan.fakultas', // Memuat jurusan dan fakultasnya sekaligus
            'tahunAjar', 
            'statusMahasiswa', 
            'jalurMasuk', 
            'dataOrangTua.kategoriPenghasilan', // Memuat data ortu dan kategori penghasilannya
            'beasiswas', 
            'suratPeringatans'
        ])->findOrFail($nim);

        // Kirim data mahasiswa yang ditemukan ke view
        return view('dashboard_biodata_mahasiswa', compact('mahasiswa'));
    }
}
