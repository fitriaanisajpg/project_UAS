@extends('admin.layouts.app')
@section('title', 'Users')
@section('content')
<div class="container-fluid">

    {{-- HEADER --}}
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h4 class="fw-bold mb-0">👤 Users</h4>
                <small class="text-muted">Manajemen akun pengguna sistem</small>
            </div>

            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                + Tambah User
            </a>
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
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $i => $user)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td class="fw-semibold">{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">

                                <a href="{{ route('admin.users.edit', $user) }}"
                                   class="btn btn-icon btn-warning"
                                   title="Edit">
                                    ✏️
                                </a>

                                <form action="{{ route('admin.users.destroy', $user) }}"
                                      method="POST">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-icon btn-danger"
                                            onclick="return confirm('Yakin hapus user?')"
                                            title="Hapus">
                                        🗑
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            Belum ada user
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
