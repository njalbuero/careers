@extends('backoffice.layouts.main')
@section('title', 'Dashboard')
@section('dashboard-selected', 'selected')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card spur-card">
                <div class="card-header bg-hsi text-white ">
                    <div class="spur-card-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div class="spur-card-title"><a href="/backoffice/analytics/accounting">Accounting</a></div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $accounting_jobs }}</p>
                            <p>{{ $accounting_applicants }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card spur-card">
                <div class="card-header bg-hsi text-white ">
                    <div class="spur-card-icon">
                        <i class="fas fa-toolbox"></i>
                    </div>
                    <div class="spur-card-title"><a href="/backoffice/analytics/admin">Admin</a></div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $admin_jobs }}</p>
                            <p>{{ $admin_applicants }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card spur-card">
                <div class="card-header bg-hsi text-white ">
                    <div class="spur-card-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <div class="spur-card-title"><a href="/backoffice/analytics/graphics">Graphics</a></div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $graphics_jobs }}</p>
                            <p>{{ $graphics_applicants }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card spur-card">
                <div class="card-header bg-hsi text-white">
                    <div class="spur-card-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="spur-card-title">
                        <a href="/backoffice/analytics/mobile_development">Mobile Development</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $mobile_jobs }}</p>
                            <p>{{ $mobile_applicants }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card spur-card">
                <div class="card-header bg-hsi text-white ">
                    <div class="spur-card-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <div class="spur-card-title"><a href="/backoffice/analytics/quality_assurance">Quality Assurance</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                            
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $qa_jobs }}</p>
                            <p>{{ $qa_applicants }}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card spur-card">
                <div class="card-header bg-hsi text-white ">
                    <div class="spur-card-icon">
                        <i class="fas fa-comments-dollar"></i>
                    </div>
                    <div class="spur-card-title"><a href="/backoffice/analytics/sales">Sales</a></div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                            
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $sales_jobs }}</p>
                            <p>{{ $sales_applicants }}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card spur-card">
                <div class="card-header bg-hsi text-white ">
                    <div class="spur-card-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="spur-card-title"><a href="/backoffice/analytics/web_development">Web Development</a></div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $web_jobs }}</p>
                            <p>{{ $web_applicants }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
