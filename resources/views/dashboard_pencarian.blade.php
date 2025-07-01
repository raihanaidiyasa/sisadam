@extends(Auth::check() ? 'layouts.eksekutif' : 'layouts.app')

@section('title', 'Hasil Pencarian - Satu Data Mahasiswa')

@section('content')

<link rel="stylesheet" href="{{ asset('dashboard_public/dashboard_pencarian.css') }}">
<div class="breadcrumb">
    <span>Beranda</span> &gt; <strong>Hasil Pencarian</strong>
</div>

<div class="search-results-container">
    <h2>Hasil Pencarian</h2>
    
    <!-- Form Pencarian -->
    <form action="{{ route('dashboardPencarian') }}" method="GET" class="search-box">
        <input type="text" name="search" placeholder="Cari Nama atau NIM Mahasiswa" value="{{ request('search') }}">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Cek jika ada data mahasiswa --}}
                @forelse ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    {{-- Menggunakan accessor yang kita buat di model --}}
                    <td>{{ $mahasiswa->jenis_kelamin_text }}</td> 
                    {{-- Mengambil nama jurusan dari relasi. Tanda ?? 'N/A' untuk jaga-jaga jika data jurusan tidak ada --}}
                    <td>{{ $mahasiswa->jurusan->nama_jurusan ?? 'N/A' }}</td>
                    <td><a href="{{ route('dashboardBiodata', $mahasiswa->nim) }}">Lihat Detail</a></td>
                </tr>
                @empty
                {{-- Tampilan jika tidak ada data yang ditemukan --}}
                <tr>
                    <td colspan="5" style="text-align: center; padding: 20px;">Data tidak ditemukan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Navigasi Paginasi Kustom --}}
        <div class="pagination">
            {{-- Tombol Kembali (Previous) --}}
            <a href="{{ $mahasiswas->previousPageUrl() }}" class="pagination-arrow @if ($mahasiswas->onFirstPage()) disabled @endif">
                <i class="fas fa-chevron-left"></i>
            </a>

            {{-- Tampilan Halaman --}}
            <span>{{ $mahasiswas->currentPage() }} dari {{ $mahasiswas->lastPage() }}</span>

            {{-- Tombol Selanjutnya (Next) --}}
            <a href="{{ $mahasiswas->nextPageUrl() }}" class="pagination-arrow @if (!$mahasiswas->hasMorePages()) disabled @endif">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
</div>
@endsection
