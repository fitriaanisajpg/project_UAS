@extends('admin.layouts.app')
@section('title', 'Users')
@section('content')
<div class="container">
    <h3>Edit User</h3>

    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ $user->name }}"
                   required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   value="{{ $user->email }}"
                   required>
        </div>

        <div class="mb-3">
            <label>Password <small>(kosongkan jika tidak diubah)</small></label>
            <input type="password"
                   name="password"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control" required>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>
                    Admin
                </option>
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>
                    User
                </option>
            </select>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
