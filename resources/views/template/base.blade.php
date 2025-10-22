
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Google Fonts (usado por SB Admin 2) --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    {{-- Font Awesome (iconos) --}}
    <link href="{{ asset('assets/sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    {{-- SB Admin 2 (estilo principal) --}}
    <link href="{{ asset('assets/sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">

    {{-- Ajustes mínimos para el layout base --}}
    <style>
        body { font-family: 'Nunito', sans-serif; min-height: 100vh; }
        .content-wrapper { margin-left: 240px; }
    </style>

    @stack('head')
</head>
<body id="page-top">

    <div id="wrapper">

        {{-- Sidebar SB Admin 2 --}}
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="width: 240px;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mb-3 text-decoration-none" href="{{ url('/dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="sidebar-brand-text mx-2">Mi Dashboard</div>
            </a>

            <hr class="sidebar-divider my-2">

            <!-- Nav Items -->
            <li class="nav-item">
                <a class="nav-link text-white py-2" href="{{ url('/dashboard') }}">
                    <i class="fas fa-home me-2"></i>
                    <span>Inicio</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white py-2" href="#">
                    <i class="fas fa-layer-group me-2"></i>
                    <span>Sección 1</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white py-2" href="#">
                    <i class="fas fa-table me-2"></i>
                    <span>Sección 2</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white py-2" href="#">
                    <i class="fas fa-user me-2"></i>
                    <span>Sección 3</span>
                </a>
            </li>

            <hr class="sidebar-divider my-2">
        </ul>

        {{-- Content Wrapper --}}
        <div class="content-wrapper flex-grow-1">

            {{-- Topbar SB Admin 2 --}}
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-sm">

                <!-- Botón menú lateral (decorativo) -->
                <button class="btn btn-link d-md-none rounded-circle me-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Título dinámico -->
                <span class="navbar-text fw-semibold text-primary">
                    <i class="fas fa-tachometer-alt me-2"></i>@yield('topbar_title', 'Panel de control')
                </span>

                <!-- Botón derecha -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Ir al inicio
                        </a>
                    </li>
                </ul>
            </nav>

            {{-- Contenido principal --}}
            <div class="container-fluid py-4">
                @yield('content')
            </div>

        </div> {{-- Fin content-wrapper --}}
    </div> {{-- Fin wrapper --}}

    {{-- JS de Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
