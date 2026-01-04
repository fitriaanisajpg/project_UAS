@extends('admin.layouts.app')
@section('title', 'Kategori')
@section('content')
<div class="container">
    <h3>Edit Category</h3>

    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name"
                   class="form-control"
                   value="{{ $category->name }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description"
                      class="form-control">{{ $category->description }}</textarea>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
