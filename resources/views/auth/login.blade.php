@extends('admin.layouts.auth')

@section('title', 'Login Admin Apotek')

@section('content')
<div class="auth-wrapper">

    {{-- LEFT PANEL --}}
    <div class="auth-left">
        <div class="brand">
            <span class="brand-text">Apotek Amethyst</span>
        </div>

        <h1>Welcome<br>Back!</h1>
        <p>Platform internal untuk pengelolaan obat dan stok apotek</p>
    </div>

    {{-- RIGHT PANEL --}}
    <div class="auth-right">
        <div class="login-box">
            <h2>Login</h2>
            <p class="subtitle">Silakan login menggunakan akun admin</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required autofocus>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>

                <div class="form-options">
                    <label class="remember">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="btn-login">
                    Login
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
