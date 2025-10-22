


@extends('template.base')

@section('title', 'Dashboard')
@section('topbar_title', '') {{-- no mostramos texto en la barra superior --}}

@push('head')
<style>
    /* Ocultar la barra lateral y usar todo el ancho */
    .sidebar { display: none !important; }
    .content-wrapper { margin-left: 0 !important; }

    /* 🔹 Ocultar por completo el topbar solo en esta vista */
    .topbar { display: none !important; }
    /* 🔹 Asegurar que el contenido suba a la parte superior */
    .content-wrapper { margin-top: 0 !important; }

    /* Barra horizontal principal */
    .dash-nav{
        display:flex; flex-wrap:wrap; align-items:center; gap:.75rem;
        white-space:nowrap; overflow-x:auto; -webkit-overflow-scrolling:touch;
        padding: 1rem 1.5rem; /* margen interno uniforme */
        border-bottom: 1px solid #e5e7eb; /* línea suave inferior */
        background: #fff; /* fondo blanco limpio */
    }
    .dash-nav .nav-link{
        display:inline-flex; align-items:center; gap:.4rem;
        padding:.4rem .6rem; border-radius:.375rem;
        text-decoration:none;
    }
    .dash-nav .nav-link:hover{ background:#f3f6f9; }
    .dash-nav .divider{ width:1px; height:22px; background:#e5e7eb; margin:0 .5rem; }

    h2 { margin-top: 2rem; }
</style>
@endpush

@section('content')

    {{-- 🔹 Barra horizontal superior --}}
    <div class="dash-nav mb-4">
        <a class="nav-link text-primary" href="#"><i class="fas fa-file"></i><span>Orders</span></a>
        <a class="nav-link text-primary" href="#"><i class="fas fa-cart-shopping"></i><span>Products</span></a>
        <a class="nav-link text-primary" href="#"><i class="fas fa-users"></i><span>Customers</span></a>
        <a class="nav-link text-primary" href="#"><i class="fas fa-chart-line"></i><span>Reports</span></a>
        <a class="nav-link text-primary" href="#"><i class="fas fa-puzzle-piece"></i><span>Integrations</span></a>

        <span class="divider"></span>

        <a class="nav-link text-primary" href="#"><i class="far fa-file-lines"></i><span>Current month</span></a>
        <a class="nav-link text-primary" href="#"><i class="far fa-file-lines"></i><span>Last quarter</span></a>
        <a class="nav-link text-primary" href="#"><i class="far fa-file-lines"></i><span>Social engagement</span></a>
        <a class="nav-link text-primary" href="#"><i class="far fa-file-lines"></i><span>Year-end sale</span></a>
        <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus"></i></button>

        <div class="flex-grow-1"></div>

        <a class="nav-link text-secondary" href="#"><i class="fas fa-gear"></i><span>Settings</span></a>
        <a class="nav-link text-secondary" href="#"><i class="fas fa-right-from-bracket"></i><span>Sign out</span></a>
    </div>

    {{-- Contenido simple tipo Bootstrap Dashboard --}}
    <div class="container-fluid">
        <h2 class="mb-3">Section title</h2>

        <div class="table-responsive">
            <table class="table table-striped table-sm align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1,001</td><td>random</td><td>data</td><td>placeholder</td></tr>
                    <tr><td>1,002</td><td>placeholder</td><td>irrelevant</td><td>visual</td></tr>
                    <tr><td>1,003</td><td>data</td><td>rich</td><td>dashboard</td></tr>
                    <tr><td>1,004</td><td>information</td><td>placeholder</td><td>illustrative</td></tr>
                    <tr><td>1,005</td><td>text</td><td>random</td><td>layout</td></tr>
                    <tr><td>1,006</td><td>dashboard</td><td>irrelevant</td><td>text</td></tr>
                    <tr><td>1,007</td><td>dashboard</td><td>illustrative</td><td>rich</td></tr>
                    <tr><td>1,008</td><td>placeholder</td><td>tabular</td><td>information</td></tr>
                    <tr><td>1,009</td><td>random</td><td>data</td><td>placeholder</td></tr>
                    <tr><td>1,010</td><td>placeholder</td><td>irrelevant</td><td>visual</td></tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
