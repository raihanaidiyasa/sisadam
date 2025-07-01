<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DownloadController extends Controller
{
    public function downloadDataset()
    {
        return view('public_download_dataset');
    }

    public function downloadMahasiswaAktif()
    {
        // Header untuk memberitahu browser bahwa ini adalah file unduhan
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="data_mahasiswa_aktif_'.date('Y-m-d').'.csv"',
        ];

        // Callback untuk menulis data ke file CSV baris per baris
        $callback = function () {
            // Buka output stream
            $handle = fopen('php://output', 'w');

            // Tambahkan baris header untuk CSV
            fputcsv($handle, [
                'Nama',
                'NIM',
                'Jenis Kelamin',
                'Tahun Masuk',
                'Jurusan',
                'Status Mahasiswa'
            ]);

            // Ambil data mahasiswa per-chunk untuk efisiensi memori
            Mahasiswa::with(['jurusan', 'tahunAjar', 'statusMahasiswa'])->chunk(1000, function ($mahasiswas) use ($handle) {
                foreach ($mahasiswas as $mahasiswa) {
                    // Tambahkan baris data untuk setiap mahasiswa
                    fputcsv($handle, [
                        $mahasiswa->nama,
                        $mahasiswa->nim,
                        $mahasiswa->jenis_kelamin_text, // Menggunakan accessor dari model
                        $mahasiswa->tahunAjar->tahun_ajar ?? 'N/A',
                        $mahasiswa->jurusan->nama_jurusan ?? 'N/A',
                        $mahasiswa->statusMahasiswa->nama_status ?? 'N/A',
                    ]);
                }
            });

            // Tutup output stream
            fclose($handle);
        };

        // Kembalikan response sebagai file yang di-stream
        return new StreamedResponse($callback, 200, $headers);
    }
}
