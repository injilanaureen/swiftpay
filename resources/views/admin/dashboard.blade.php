@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #1e1e2f;
        color: #f1f1f1;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .admin-wrapper {
        padding-top: 120px; /* Ensure there's enough space below the header */
        padding-bottom: 60px;
        min-height: 100vh;
    }

    .sidebar {
        background-color: #2a2a3d;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        position: sticky;
        top: 120px;
    }

    .sidebar ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    .sidebar ul li {
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    .sidebar ul li a {
        display: block;
        padding: 10px 15px;
        background-color: #383854;
        color: #00ffff;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .sidebar ul li a:hover {
        background-color: #007bff;
        color: white;
        transform: translateX(5px);
        box-shadow: 2px 2px 10px rgba(0, 123, 255, 0.3);
    }

    .col-md-9 {
        background-color: #2a2a3d;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    h2, h3 {
        color: #ffffff;
        margin-bottom: 20px;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .admin-wrapper {
            padding-top: 100px;
        }
    }
</style>

<div class="container-fluid admin-wrapper">
    <div class="container">
        <div class="row justify-content-center align-items-start">
            <!-- Sidebar -->
            <div class="col-md-3 mb-4">
                <div class="sidebar">
                    <ul>
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('admin.navbar') }}">Navbar Categories</a></li>
                        <li><a href="{{ route('admin.settings') }}">Settings</a></li>
                    </ul>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-md-9 mt-3">
                @if(request()->is('admin/dashboard'))
                    <h2>Welcome to Admin Dashboard</h2>
                @elseif(request()->is('admin/navbar'))
                    @include('admin.partials.navbar-management', ['navbarItems' => $navbarItems])
                @elseif(request()->is('admin/settings'))
                    <h3>Settings Page (Coming Soon)</h3>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
