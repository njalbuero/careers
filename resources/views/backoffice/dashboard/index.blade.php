@extends('backoffice.layouts.main')
@section('title', 'Dashboard')
@section('dashboard-selected', 'selected')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card spur-card border-0 shadow">
                <div class="card-header bg-mobile text-white">
                    <div class="spur-card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="spur-card-title">
                        <a href="/backoffice/analytics/mobile_development">Mobile Development</a>
                    </div>
                </div>
                <div class="card-body bg-mobile text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                            <p>Hires</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $mobile_jobs }}</p>
                            <p>0</p>
                            <p>0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card spur-card border-0 shadow">
                <div class="card-header bg-web text-white">
                    <div class="spur-card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="spur-card-title"><a href="/backoffice/analytics/web_development">Web Development</a></div>
                </div>
                <div class="card-body bg-web text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                            <p>Hires</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $web_jobs }}</p>
                            <p>0</p>
                            <p>0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card spur-card border-0 shadow">
                <div class="card-header bg-graphics text-white">
                    <div class="spur-card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="spur-card-title"><a href="/backoffice/analytics/graphics">Graphics</a></div>

                </div>
                <div class="card-body bg-graphics text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                            <p>Hires</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $graphics_jobs }}</p>
                            <p>0</p>
                            <p>0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card spur-card border-0 shadow">
                <div class="card-header bg-qa text-white">
                    <div class="spur-card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="spur-card-title"><a href="/backoffice/analytics/quality_assurance">Quality Assurance</a></div>

                </div>
                <div class="card-body bg-qa text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                            <p>Hires</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $qa_jobs }}</p>
                            <p>0</p>
                            <p>0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card spur-card border-0 shadow">
                <div class="card-header bg-sales text-white">
                    <div class="spur-card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="spur-card-title"><a href="/backoffice/analytics/sales">Sales</a></div>

                </div>
                <div class="card-body bg-sales text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                            <p>Hires</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $sales_jobs }}</p>
                            <p>0</p>
                            <p>0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card spur-card border-0 shadow">
                <div class="card-header bg-accounting text-white">
                    <div class="spur-card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="spur-card-title"><a href="/backoffice/analytics/accounting">Accounting</a></div>

                </div>
                <div class="card-body bg-accounting text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                            <p>Hires</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $accounting_jobs }}</p>
                            <p>0</p>
                            <p>0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card spur-card border-0 shadow">
                <div class="card-header bg-admin text-white">
                    <div class="spur-card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="spur-card-title"><a href="/backoffice/analytics/admin">Admin</a></div>
                </div>
                <div class="card-body bg-admin text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center ">
                            <p>Listings</p>
                            <p>Applicants</p>
                            <p>Hires</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-end">
                            <p>{{ $admin_jobs }}</p>
                            <p>0</p>
                            <p>0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
