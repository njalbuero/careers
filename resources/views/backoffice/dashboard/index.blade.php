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
        <div class="col-lg-6">
            <div class="row">
                <div class="col-12">
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
            <div class="row">
                <div class="col-12">
                    <div class="card spur-card">
                        <div class="card-header bg-hsi text-white">
                            <div class="spur-card-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="spur-card-title"> Applicants </div>
                            <div class="spur-card-menu">
                                <div class="dropdown show">
                                    <a class="spur-card-menu-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body spur-card-body-chart">
                            <canvas id="spurChartjsLine"></canvas>
                            <script>
                                var ctx = document.getElementById("spurChartjsLine").getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                                        datasets: [{
                                            label: 'Blue',
                                            data: [12, 19, 3, 5, 2],
                                            backgroundColor: window.chartColors.primary,
                                            borderColor: window.chartColors.primary,
                                            fill: false
                                        }, {
                                            label: 'Red',
                                            data: [4, 12, 11, 2, 14],
                                            backgroundColor: window.chartColors.danger,
                                            borderColor: window.chartColors.danger,
                                            fill: false
                                        }]
                                    },
                                    options: {
                                        legend: {
                                            display: false
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
