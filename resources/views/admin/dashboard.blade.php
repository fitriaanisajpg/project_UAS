@extends('admin.layouts.app')

@section('content')
<div class="dashboard-wrapper">

    <h2 class="mb-4 fw-bold">Dashboard</h2>

    {{-- INFO CARD --}}
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="dashboard-card">
                <div>
                    <p class="card-title">Total Users</p>
                    <h2>{{ $totalUsers }}</h2>
                </div>
                <div class="card-icon bg-purple">
                    <i class="bi bi-people-fill"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="dashboard-card">
                <div>
                    <p class="card-title">Total Categories</p>
                    <h2>{{ $totalCategories }}</h2>
                </div>
                <div class="card-icon bg-blue">
                    <i class="bi bi-tags-fill"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="dashboard-card">
                <div>
                    <p class="card-title">Total Products</p>
                    <h2>{{ $totalProducts }}</h2>
                </div>
                <div class="card-icon bg-green">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="dashboard-card">
                <div>
                    <p class="card-title">Stock Logs</p>
                    <h2>{{ $totalStockLogs }}</h2>
                </div>
                <div class="card-icon bg-orange">
                    <i class="bi bi-clipboard-data-fill"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- DESKRIPSI --}}
    <div class="dashboard-info">
        <h5>📊 Informasi Sistem</h5>
        <p>
            Dashboard ini menampilkan ringkasan data penting pada sistem
            pengelolaan apotek, meliputi jumlah pengguna, kategori obat,
            produk, serta histori keluar masuk stok.
        </p>
    </div>

</div>
@endsection
