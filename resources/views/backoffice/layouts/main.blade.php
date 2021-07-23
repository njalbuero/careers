<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
    <script src="/js/chart-js-config.js"></script>
    <title>@yield('title')</title>
    @yield('style')
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="/" class="spur-logo"><span>Recruitment</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="/backoffice/dashboard" class="dash-nav-item @yield('dashboard-selected')">
                    <i class="fas fa-home"></i> Dashboard </a>
                <a href="/backoffice/listings/" class="dash-nav-item @yield('listings-selected')">
                    <i class="fas fa-briefcase"></i> Job Listings </a>
                <a href="/backoffice/applicants/" class="dash-nav-item @yield('applicants-selected')">
                    <i class="fas fa-user-tie"></i> Appplicants </a>
                <div class="dash-nav-dropdown @yield('accounting-show')">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-calculator"></i> Accounting </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="/backoffice/listings/accounting" class="dash-nav-dropdown-item">Job Listings</a>
                        <a href="/backoffice/applicants/accounting" class="dash-nav-dropdown-item">Applicants</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown @yield('admin-show')">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-toolbox"></i> Admin </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="/backoffice/listings/admin" class="dash-nav-dropdown-item">Job Listings</a>
                        <a href="/backoffice/applicants/admin" class="dash-nav-dropdown-item">Applicants</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown @yield('graphics-show')">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-paint-brush"></i> Graphics </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="/backoffice/listings/graphics" class="dash-nav-dropdown-item">Job Listings</a>
                        <a href="/backoffice/applicants/graphics" class="dash-nav-dropdown-item">Applicants</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown @yield('mobile_development-show')">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-mobile-alt"></i> Mobile Development </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="/backoffice/listings/mobile_development" } class="dash-nav-dropdown-item">Job
                            Listings</a>
                        <a href="/backoffice/applicants/mobile_development"
                            class="dash-nav-dropdown-item">Applicants</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown @yield('quality_assurance-show')">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-clipboard-check"></i> Quality Assurance </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="/backoffice/listings/quality_assurance" class="dash-nav-dropdown-item">Job Listings</a>
                        <a href="/backoffice/applicants/quality_assurance" class="dash-nav-dropdown-item">Applicants</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown @yield('sales-show')">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-comments-dollar"></i> Sales </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="/backoffice/listings/sales" class="dash-nav-dropdown-item">Job Listings</a>
                        <a href="/backoffice/applicants/sales" class="dash-nav-dropdown-item">Applicants</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown @yield('web_development-show')">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-laptop-code"></i> Web Development </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="/backoffice/listings/web_development" class="dash-nav-dropdown-item">Job Listings</a>
                        <a href="/backoffice/applicants/web_development" class="dash-nav-dropdown-item">Applicants</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <div class="tools">
                    <div class="d-flex align-items-center">
                        @foreach (Auth::user()->roles as $role)
                            {{ $role->display_name }}
                        @endforeach
                    </div>
                   
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownUser">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <h1 class="dash-title">@yield('title')</h1>
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="/js/spur.js"></script>
    @push('datatable-script')
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js">
        </script>
    @endpush
    @yield('script')
</body>

</html>
