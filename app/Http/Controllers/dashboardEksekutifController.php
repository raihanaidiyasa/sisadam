<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class DashboardEksekutifController extends Controller
{
    public function eksekutif()
    {
        // 1. Data untuk Grafik Status Pembayaran UKT
        $uktData = Mahasiswa::select(
                DB::raw("SUM(CASE WHEN status_ukt = 1 THEN 1 ELSE 0 END) as lunas"),
                DB::raw("SUM(CASE WHEN status_ukt = 0 THEN 1 ELSE 0 END) as belum_lunas")
            )
            ->first();

        // 2. Data untuk Grafik Status Mahasiswa
        $statusData = Mahasiswa::join('status_mahasiswa', 'mahasiswa.status_mahasiswa_id', '=', 'status_mahasiswa.status_id')
            ->select('status_mahasiswa.nama_status', DB::raw('count(*) as total'))
            ->groupBy('status_mahasiswa.nama_status')
            ->pluck('total', 'nama_status'); // Hasilnya: ['Aktif' => 100, 'Cuti' => 20, ...]

        // 3. Data untuk Grafik Asal Daerah (Top 5 Provinsi)
        $asalData = Mahasiswa::select('provinsi', DB::raw('count(*) as total'))
            ->whereNotNull('provinsi')
            ->groupBy('provinsi')
            ->orderByDesc('total')
            ->limit(5)
            ->pluck('total', 'provinsi');

        // 4. Data untuk Grafik Populasi Mahasiswa Aktif per Tahun
        $populasiData = Mahasiswa::join('tahun_ajar', 'mahasiswa.tahun_ajar_id', '=', 'tahun_ajar.tahun_ajar_id')
            ->select('tahun_ajar.tahun_ajar', DB::raw('count(*) as total'))
            ->groupBy('tahun_ajar.tahun_ajar')
            ->orderBy('tahun_ajar.tahun_ajar', 'asc')
            ->pluck('total', 'tahun_ajar');

        // Kirim semua data ke view
        return view('dashboard_eksekutif', compact(
            'uktData',
            'statusData',
            'asalData',
            'populasiData'
        ));
    }
    public function dataMahasiswaAktif()
    {
        return view('data_mahasiswa_aktif');
    }
}