@extends('admin.layouts.app')
@section('title', 'Stock Log')
@section('content')
<div class="container">
    <h1>Add Stock Log</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $err)<li>{{ $err }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.stock-logs.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Produk</label>
            <select name="product_id" class="form-control" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" {{ ($selectedProduct == $product->id) ? 'selected' : '' }}>
                        {{ $product->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Tipe</label>
            <select name="type" class="form-control" required>
                <option value="IN">IN</option>
                <option value="OUT">OUT</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control" min="1" required>
        </div>

        <div class="mb-3">
            <label>Note</label>
            <textarea name="note" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.stock-logs.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
