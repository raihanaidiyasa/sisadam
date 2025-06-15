@extends('layouts.app') {{-- Memperpanjang layout utama --}}

@section('title', 'Halaman Utama - Satu Data Mahasiswa') {{-- Mengganti judul spesifik halaman --}}

@section('content') {{-- Memulai bagian konten --}}

<link rel="stylesheet" href="{{ asset('dashboard_public/dashboard_biodata_mahasiswa.css') }}">
77
    <div class="breadcrumb">
        <span>Beranda</span> &gt; <strong>Hasil Pencarian</strong>
    </div>

    <section class="card-title">Biodata Mahasiswa</section>
    <section class="card-data">
        <div class="informasi">
            <p>Nama<br><strong>Raihan Gemoyidiyasa</strong></p>
            <p>Nim<br><strong>1227050137</strong></p>
            <p>Jenis Kelamin<br><strong>Laki Laki</strong></p>
        </div>
        <div class="informasi">
            <p>Tahun Masuk<br><strong>Raihan Gemoyidiyasa</strong></p>
            <p>Jurusan/Prodi<br><strong>1227050137</strong></p>
            <p>Status Mahasiswa<br><strong>Laki Laki</strong></p>
        </div>
    </section>