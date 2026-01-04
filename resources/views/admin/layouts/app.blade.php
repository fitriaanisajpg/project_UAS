<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>


    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">


    {{-- CSS INLINE CEUNAHHH --}}
    <style>
        body {
            background-color: #f4f6fb;
        }

        /* SIDEBAR */
        .sidebar {
            background: linear-gradient(180deg, #8e2de2, #b993f5);
        }

        .sidebar h5 {
            font-weight: bold;
            letter-spacing: 1px;
        }

        .sidebar .nav-link {
            color: #f1f1f1;
            padding: 10px 15px;
            border-radius: 6px;
            margin-bottom: 6px;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: rgba(255,255,255,0.2);
            color: #fff;
        }

        /* MAIN */
        main {
            min-height: auto;
        }

        /* FOOTER */
        .footer {
            font-size: 13px;
            color: #888;
            border-top: 1px solid #e5e5e5;
            padding: 10px 0;
            margin-top: 40px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        {{-- SIDEBAR --}}
        <nav class="col-md-2 d-none d-md-block sidebar min-vh-100 p-3">
            <h5 class="text-white text-center mb-4">AMETHYST</h5>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                       href="/admin/dashboard">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}"
                       href="/admin/users">Users</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/categories*') ? 'active' : '' }}"
                       href="/admin/categories">Categories</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/products*') ? 'active' : '' }}"
                       href="/admin/products">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/stock-logs*') ? 'active' : '' }}"
                       href="{{ route('admin.stock-logs.index') }}">Stock Log</a>
                </li>

                <li class="nav-item mt-4">
                    <form action="{{ route('logout') }}" method="POST" id="logout-form">
                        @csrf
                        <button type="submit"
                            class="nav-link w-100 text-start"
                            style="background:none;border:none;"
                            onclick="return confirm('Apakah Anda yakin ingin logout?')">
                            <i class="bi bi-box-arrow-right me-1"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </nav>

        {{-- MAIN CONTENT --}}
        <main class="col-md-10 ms-sm-auto px-md-4 py-4 d-flex flex-column">
            <div class="flex-grow-1">
                @yield('content')
            </div>

            <div class="footer mt-4">
                © {{ date('Y') }} Apotek Internal System • Laravel
            </div>
        </main>


    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
