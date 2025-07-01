<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class dashboardPencarianController extends Controller
{
    public function dashboardPencarian(Request $request) // Tambahkan Request $request untuk menangani input pencarian
    {
        // 1. Ambil kata kunci pencarian dari input form
        $keyword = $request->input('search');

        // 2. Ambil data mahasiswa dari database, lakukan pencarian jika ada keyword
        //    Gunakan 'with' untuk memuat relasi jurusan (lebih efisien)
        //    Gunakan paginate(5) untuk membatasi 5 data per halaman
        $mahasiswas = Mahasiswa::with('jurusan')
            ->when($keyword, function ($query, $keyword) {
                return $query->where('nama', 'like', "%{$keyword}%")
                             ->orWhere('nim', 'like', "%{$keyword}%");
            })
            ->paginate(5);

        // 3. Kirim data mahasiswa yang sudah dipaginasi ke view
        //    Gantilah return view lama Anda dengan yang ini
        return view('dashboard_pencarian', compact('mahasiswas'));
    }
}
