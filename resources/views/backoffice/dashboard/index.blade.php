@extends('backoffice.layouts.main')
@section('title', 'Dashboard')
@section('dashboard-selected', 'selected')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card spur-card border-0">
                <div class="card-header bg-hsi text-white">
                    <div class="spur-card-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="spur-card-title">Departments</div>
                </div>
                <div class="card-body ">
                    <table class="table table-in-card">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Listings</th>
                                <th scope="col">Applicants</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a class="text-dark" href="/backoffice/analytics/accounting">Accounting</a>
                                </td>
                                <td>{{ $accounting_jobs }}</td>
                                <td>{{ $accounting_applicants }}</td>
                            </tr>
                            <tr>
                                <td><a class="text-dark" href="/backoffice/analytics/admin">Admin</a>
                                </td>
                                <td>{{ $admin_jobs }}</td>
                                <td>{{ $admin_applicants }}</td>
                            </tr>
                            <tr>
                                <td><a class="text-dark" href="/backoffice/analytics/graphics">Graphics</a>
                                </td>
                                <td>{{ $graphics_jobs }}</td>
                                <td>{{ $graphics_applicants }}</td>
                            </tr>
                            <tr>
                                <td><a class="text-dark" href="/backoffice/analytics/mobile_development">Mobile
                                        Development</a>
                                </td>
                                <td>{{ $mobile_jobs }}</td>
                                <td>{{ $mobile_applicants }}</td>
                            </tr>
                            <tr>
                                <td><a class="text-dark" href="/backoffice/analytics/quality_assurance">Quality
                                        Assurance</a>
                                </td>
                                <td>{{ $qa_jobs }}</td>
                                <td>{{ $qa_applicants }}</td>
                            </tr>
                            <tr>
                                <td><a class="text-dark" href="/backoffice/analytics/sales">Sales</a>
                                </td>
                                <td>{{ $sales_jobs }}</td>
                                <td>{{ $sales_applicants }}</td>
                            </tr>
                            <tr>
                                <td><a class="text-dark" href="/backoffice/analytics/web_development">Web Development</a>
                                </td>
                                <td>{{ $web_jobs }}</td>
                                <td>{{ $web_applicants }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="stats stats-light shadow-none text-white bg-hsi">
                <h3 class="stats-title"> Total Applicants </h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <span class="h2">100</span>
                    </div>
                    <div class="stats-data">
                        <div class="stats-change">
                            <span class="stats-timeframe">from today</span>
                            <span class="stats-percentage">10</span>
                        </div>
                        <div class="stats-change">
                            <span class="stats-timeframe">from this week</span>
                            <span class="stats-percentage">20</span>
                        </div>
                        <div class="stats-change">
                            <span class="stats-timeframe">from this month</span>
                            <span class="stats-percentage">30</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
