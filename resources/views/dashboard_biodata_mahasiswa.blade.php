@extends(Auth::check() ? 'layouts.eksekutif' : 'layouts.app')

@section('title', 'Halaman Utama - Satu Data Mahasiswa') {{-- Mengganti judul spesifik halaman --}}

@section('content') {{-- Memulai bagian konten --}}

<link rel="stylesheet" href="{{ asset('dashboard_public/dashboard_biodata_mahasiswa.css') }}">
<div class="breadcrumb">
    <a href="{{ route('dashboardPublic') }}">Beranda</a> &gt; 
    <a href="{{ route('dashboardPencarian') }}">Hasil Pencarian</a> &gt; 
    <strong>Biodata Mahasiswa</strong>
</div>

<section class="card-title">Biodata Mahasiswa</section>
<section class="card-data">
    <div class="informasi">
        <p>Nama<br><strong>{{ $mahasiswa->nama }}</strong></p>
        <p>NIM<br><strong>{{ $mahasiswa->nim }}</strong></p>
        <p>Jenis Kelamin<br><strong>{{ $mahasiswa->jenis_kelamin_text }}</strong></p>
    </div>
    <div class="informasi">
        {{-- Tanda ?? 'N/A' adalah fallback jika data relasi tidak ada --}}
        <p>Tahun Masuk<br><strong>{{ $mahasiswa->tahunAjar->tahun_ajar ?? 'N/A' }}</strong></p>
        <p>Jurusan/Prodi<br><strong>{{ $mahasiswa->jurusan->nama_jurusan ?? 'N/A' }}</strong></p>
        <p>Status Mahasiswa<br><strong>{{ $mahasiswa->statusMahasiswa->nama_status ?? 'N/A' }}</strong></p>
    </div>
</section>

@auth('web')
<section class="card-title">Detail Informasi (Khusus Eksekutif)</section>

{{-- Data Pribadi & Akademik --}}
<section class="card-data"> {{-- Menggunakan kelas yang sama dengan publik --}}
    <div class="informasi"> {{-- Menggunakan kelas yang sama dengan publik --}}
        <h4>Data Pribadi</h4>
        <p>Alamat Lengkap<br><strong>{{ $mahasiswa->alamat_lengkap ?? 'N/A' }}</strong></p>
        <p>Provinsi<br><strong>{{ $mahasiswa->provinsi ?? 'N/A' }}</strong></p>
        <p>Nomor Telepon<br><strong>{{ $mahasiswa->no_telp ?? 'N/A' }}</strong></p>
        <p>Email<br><strong>{{ $mahasiswa->email ?? 'N/A' }}</strong></p>
    </div>
    <div class="informasi"> {{-- Menggunakan kelas yang sama dengan publik --}}
        <h4>Data Akademik</h4>
        <p>Fakultas<br><strong>{{ $mahasiswa->jurusan->fakultas->nama_fakultas ?? 'N/A' }}</strong></p>
        <p>Jalur Masuk<br><strong>{{ $mahasiswa->jalurMasuk->nama_jalur ?? 'N/A' }}</strong></p>
        <p>Semester Berjalan<br><strong>{{ $mahasiswa->semester_berjalan ?? 'N/A' }}</strong></p>
        <p>IPK<br><strong>{{ number_format($mahasiswa->ipk, 2) ?? 'N/A' }}</strong></p>
        <p>Total SKS Ditempuh<br><strong>{{ $mahasiswa->sks_ditempuh ?? 'N/A' }}</strong></p>
        <p>SKS Semester Ini<br><strong>{{ $mahasiswa->sks_semester_ini ?? 'N/A' }}</strong></p>
        <p>Status UKT<br><strong>{{ $mahasiswa->status_ukt_text }}</strong></p>
    </div>
</section>

{{-- Data Keluarga & Riwayat --}}
<section class="card-data"> {{-- Menggunakan kelas yang sama dengan publik --}}
    <div class="informasi"> {{-- Menggunakan kelas yang sama dengan publik --}}
        <h4>Data Keluarga</h4>
        <p>Nama Ayah<br><strong>{{ $mahasiswa->dataOrangTua->nama_ayah ?? 'N/A' }}</strong></p>
        <p>Nama Ibu<br><strong>{{ $mahasiswa->dataOrangTua->nama_ibu ?? 'N/A' }}</strong></p>
        <p>Pekerjaan Ayah<br><strong>{{ $mahasiswa->dataOrangTua->pekerjaan_ayah ?? 'N/A' }}</strong></p>
        <p>Pekerjaan Ibu<br><strong>{{ $mahasiswa->dataOrangTua->pekerjaan_ibu ?? 'N/A' }}</strong></p>
        <p>Nomor Telepon Ayah<br><strong>{{ $mahasiswa->dataOrangTua->no_telp_ayah ?? 'N/A' }}</strong></p>
        <p>Nomor Telepon Ibu<br><strong>{{ $mahasiswa->dataOrangTua->no_telp_ibu ?? 'N/A' }}</strong></p>
        <p>Kategori Penghasilan<br><strong>{{ $mahasiswa->dataOrangTua->kategoriPenghasilan->nama_kategori ?? 'N/A' }}</strong></p>
    </div>
    <div class="informasi"> {{-- Menggunakan kelas yang sama dengan publik --}}
        <h4>Riwayat Lainnya</h4>
        <p>Daftar Beasiswa Diterima</p>
        <ul>
            @forelse($mahasiswa->beasiswas as $beasiswa)
                <li><strong>{{ $beasiswa->nama_beasiswa }}</strong></li>
            @empty
                <li><strong>Tidak ada data beasiswa.</strong></li>
            @endforelse
        </ul>
        <hr>
        <p>Surat Peringatan (SP) Diterima</p>
        <ul>
            @forelse($mahasiswa->suratPeringatans as $sp)
                <li><strong>{{ $sp->alasan }} - {{ $sp->tanggal->format('d M Y') }}</strong></li>
            @empty
                <li><strong>Tidak pernah menerima SP.</strong></li>
            @endforelse
        </ul>
    </div>
</section>
@endauth
    @endsection {{-- Mengakhiri bagian konten --}}