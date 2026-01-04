@extends('admin.layouts.app')
@section('title', 'Stock Log')
@section('content')
<div class="container-fluid">

    {{-- HEADER --}}
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h4 class="fw-bold mb-0">📊 Stock Log</h4>
                <small class="text-muted">Histori keluar & masuk stok</small>
            </div>

            <a href="{{ route('admin.stock-logs.create') }}" class="btn btn-primary">
                + Add Stock Log
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- TABLE --}}
    <div class="card shadow-sm border-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Admin</th>
                        <th>Produk</th>
                        <th>Tipe</th>
                        <th>Qty</th>
                        <th>Note</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($logs as $i => $log)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $log->user->name ?? '-' }}</td>
                        <td>{{ $log->product->name ?? 'Produk dihapus' }}</td>
                        <td>{{ $log->type }}</td>
                        <td>{{ $log->quantity }}</td>
                        <td>{{ $log->note ?? '-' }}</td>
                        <td>{{ $log->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">
                            Belum ada histori stock
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
