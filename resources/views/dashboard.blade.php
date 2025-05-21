@extends('layouts.admin')

@section('title', 'Dashboard')
@push ('styles')
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .dashboard-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
        }
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .card-icon {
            font-size: 2.5rem;
        }
        .card-header {
            border-bottom: none;
            background-color: transparent;
        }
    </style>
@endpush

@section('content')
<div class="container bg-white">
    <div class="row justify-content-center">
        <div class="title py-4 d-flex align-items-center">
            <img src="{{ asset('images/logo.png') }}" style="max-width: 75px" alt=""> 
            <h1 style="color: #003156 ">DASHBOARD <span style="color: #25d366">SPEKTRUM</span> </h1>
        </div>

    </div>
</div>


 <div class="container">
        <h2 class="mb-4 mt-3">Dashboard Menu</h2>
        
        <div class="row g-4">
            <div class="col-md-4 col-sm-6">
                <a href="{{ route('admin_product') }}" class="text-decoration-none">
                    <div class="card dashboard-card h-100 border-0 shadow-sm">
                        <div class="card-header bg-primary text-white text-center py-3">
                            <i class="bi bi-box-seam card-icon"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Product Dashboard</h5>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <a href="{{ route('admin_porto') }}" class="text-decoration-none">
                    <div class="card dashboard-card h-100 border-0 shadow-sm">
                        <div class="card-header bg-success text-white text-center py-3">
                            <i class="bi bi-briefcase card-icon"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Portofolio Dashboard</h5>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <a href="{{ route('admin_service') }}" class="text-decoration-none">
                    <div class="card dashboard-card h-100 border-0 shadow-sm">
                        <div class="card-header bg-info text-white text-center py-3">
                            <i class="bi bi-tools card-icon"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Services Dashboard</h5>
                        </div>
                    </div>
                </a>
            </div>
            
@endsection
