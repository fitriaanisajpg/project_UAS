@extends('admin.layouts.app')
@section('title', 'Produk')
@section('content')
<div class="container-fluid">

    {{-- HEADER --}}
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="fw-bold mb-0">📦 Produk</h4>
                    <small class="text-muted">
                        Daftar produk obat yang tersedia di apotek
                    </small>
                </div>

                <a href="{{ route('admin.products.create') }}"
                   class="btn btn-primary">
                    + Tambah Produk
                </a>
            </div>

        </div>
    </div>

    {{-- ALERT --}}
    @if(session('success'))
        <div class="alert alert-success shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- TABLE --}}
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="50">No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Gambar</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($products as $index => $product)
                        <tr>
                            {{-- NO --}}
                            <td>{{ $index + 1 }}</td>

                            {{-- NAMA --}}
                            <td class="fw-semibold">{{ $product->name }}</td>

                            {{-- KATEGORI (TANPA BACKGROUND) --}}
                            <td>{{ $product->category->name }}</td>

                            {{-- HARGA --}}
                            <td>
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </td>

                            {{-- STOK (POLOS) --}}
                            <td>{{ $product->stock }}</td>

                            {{-- GAMBAR --}}
                            <td>
                                @if($product->image)
                                    <img src="{{ asset('storage/'.$product->image) }}"
                                        class="product-img">
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>

                            {{-- AKSI (ICON, DIKELOMPOKKAN) --}}
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">

                                    {{-- EDIT --}}
                                    <a href="{{ route('admin.products.edit', $product->id) }}"
                                    class="btn btn-icon btn-warning"
                                    title="Edit Produk">
                                        ✏️
                                    </a>

                                    {{-- UPDATE STOK --}}
                                    <a href="{{ route('admin.stock-logs.create', ['product_id' => $product->id]) }}"
                                    class="btn btn-icon btn-info"
                                    title="Update Stok">
                                        📦
                                    </a>

                                    {{-- HAPUS --}}
                                    <form action="{{ route('admin.products.destroy', $product->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-icon btn-danger"
                                                title="Hapus Produk"
                                                onclick="return confirm('Yakin hapus produk?')">
                                            🗑
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                Belum ada data produk
                            </td>
                        </tr>
                        @endforelse
                        </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
@endsection
