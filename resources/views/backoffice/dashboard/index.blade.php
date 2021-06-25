@extends('backoffice.layouts.main')
@section('title', 'Dashboard')
@section('dashboard-selected', 'selected')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-12">
                    <div class="card spur-card">
                        <div class="card-header bg-hsi text-white">
                            <div class="spur-card-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="spur-card-title"> Open positions by department </div>
                        </div>
                        <div class="card-body spur-card-body-chart">
                            @if ($jobs_total_count)
                                <canvas id="spurChartjsDougnut"></canvas>
                                <script>
                                    const jobs_count = [{!! json_encode($accounting_jobs_count) !!},
                                        {!! json_encode($admin_jobs_count) !!},
                                        {!! json_encode($graphics_jobs_count) !!},
                                        {!! json_encode($mobile_jobs_count) !!},
                                        {!! json_encode($qa_jobs_count) !!},
                                        {!! json_encode($sales_jobs_count) !!},
                                        {!! json_encode($web_jobs_count) !!}
                                    ];
                                    var ctx = document.getElementById("spurChartjsDougnut").getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'doughnut',
                                        data: {
                                            labels: ["Accounting", "Admin", "Graphics", "Mobile Development", "Quality Assurance", "Sales",
                                                "Web Development"
                                            ],
                                            datasets: [{
                                                label: 'Week',
                                                data: jobs_count,
                                                backgroundColor: [
                                                    '#1ABC9C',
                                                    '#2ECC71',
                                                    '#3498DB',
                                                    '#9B59B6',
                                                    '#F1C40F',
                                                    '#E67E22',
                                                    '#E74C3C',
                                                ],
                                                borderColor: '#fff',
                                                fill: false
                                            }]
                                        },
                                        options: {
                                            legend: {
                                                display: true,
                                                position: 'right'
                                            }
                                        }
                                    });
                                </script>
                            @else
                                <div class="text-center">
                                    No records
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="row">
                <div class="col-12">
                    <div class="card spur-card">
                        <div class="card-header bg-hsi text-white">
                            <div class="spur-card-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="spur-card-title"> Applications received by department </div>
                        </div>
                        <div class="card-body spur-card-body-chart">
                            @if ($applicants_total_count)
                                <canvas id="spurChartjsTwoBars"></canvas>
                                <script>
                                    const applicants_count = [{!! json_encode($accounting_applicants_count) !!},
                                        {!! json_encode($admin_applicants_count) !!},
                                        {!! json_encode($graphics_applicants_count) !!},
                                        {!! json_encode($mobile_applicants_count) !!},
                                        {!! json_encode($qa_applicants_count) !!},
                                        {!! json_encode($sales_applicants_count) !!},
                                        {!! json_encode($web_applicants_count) !!}
                                    ];
                                    var ctx = document.getElementById("spurChartjsTwoBars").getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ["Accounting", "Admin", "Graphics", "Mobile Development", "Quality Assurance", "Sales",
                                                "Web Development"
                                            ],
                                            datasets: [{
                                                label: 'Applicants',
                                                data: applicants_count,
                                                backgroundColor: [
                                                    '#1ABC9C',
                                                    '#2ECC71',
                                                    '#3498DB',
                                                    '#9B59B6',
                                                    '#F1C40F',
                                                    '#E67E22',
                                                    '#E74C3C',
                                                ],
                                                borderColor: 'transparent'
                                            }, ]
                                        },
                                        options: {
                                            legend: {
                                                display: false
                                            },
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true,
                                                        suggestedMax: 5
                                                    }
                                                }],
                                                xAxes: [{
                                                    ticks: {
                                                        autoSkip: false
                                                    }
                                                }]
                                            }

                                        }
                                    });
                                </script>
                            @else
                                <div class="text-center">No Records</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
