@extends('admin.layouts.app')
@section('title', 'Kategori')
@section('content')
<div class="container-fluid">

    {{-- HEADER --}}
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h4 class="fw-bold mb-0">📂 Categories</h4>
                <small class="text-muted">Kategori produk obat</small>
            </div>

            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
                + Tambah Category
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
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $i => $category)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td class="fw-semibold">{{ $category->name }}</td>
                        <td>{{ $category->description ?? '-' }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">

                                <a href="{{ route('admin.categories.edit', $category) }}"
                                   class="btn btn-icon btn-warning"
                                   title="Edit">
                                    ✏️
                                </a>

                                <form action="{{ route('admin.categories.destroy', $category) }}"
                                      method="POST">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-icon btn-danger"
                                            onclick="return confirm('Yakin hapus category?')"
                                            title="Hapus">
                                        🗑
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">
                            Belum ada kategori
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
