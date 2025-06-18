@extends('layouts.app') {{-- Memperpanjang layout utama --}}

@section('title', 'Halaman Utama - Satu Data Mahasiswa') {{-- Mengganti judul spesifik halaman --}}

@section('content') {{-- Memulai bagian konten --}}

<link rel="stylesheet" href="{{ asset('dashboard_public/dashboard_pencarian.css') }}">
<div class="breadcrumb">
        <span>Beranda</span> &gt; <strong>Hasil Pencarian</strong>
    </div>

    <div class="search-results-container">
        <h2>Hasil Pencarian</h2>
        <div class="search-box">
            <input type="text" placeholder="Nama Mahasiswa">
            <button><i class="fas fa-search"></i></button>
        </div>

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
                    <tr>
                        <td>Raihan Aidiyasha Shadow</td>
                        <td>1227050112</td>
                        <td>Laki Laki</td>
                        <td>Teknik Lingkungan</td>
                        <td><a href="{{ route('dashboardBiodata') }}">Lihat Detail</a></td>
                    </tr>
                    <tr>
                        <td>Raihan Aidigimon</td>
                        <td>1221050012</td>
                        <td>Laki Laki</td>
                        <td>Dakwah Komunikasi Islam</td>
                        <td><a href="#">Lihat Detail</a></td>
                    </tr>
                    <tr>
                        <td>Raihan gemoyidiyasa</td>
                        <td>1170012021</td>
                        <td>Laki Laki</td>
                        <td>Teknik Informatika</td>
                        <td><a href="#">Lihat Detail</a></td>
                    </tr>
                </tbody>
            </table>

            <div class="pagination">
                <button disabled><i class="fas fa-chevron-left"></i></button>
                <span>1 dari 1</span>
                <button disabled><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
@endsection {{-- Mengakhiri bagian konten --}}