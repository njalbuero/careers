<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
    @yield('style')
</head>

<body style="background-image: url('images/@yield('background')); background-attachment: fixed; background-repeat: no-repeat; 
    background-size: cover;">
    <div class="header-links">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="links-left">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
                <div class="links-right">
                    <i class="fas fa-phone-alt"></i><span>02 586 87 29</span>
                    <i class="far fa-envelope" style="font-size: 15px"></i><span>support@highlysucceed.com</span>

                </div>
            </div>
        </div>
    </div>
    <hr class="h">
    <header>
        <nav class="navbar navbar-expand-md" style="padding:25px 0px 20px 0px; background-color: white;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home"><img src="{{ asset('images/logo.png') }}"
                        style="width: 360px; margin-left:160px;"></a>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">
                            <h6 class="@yield('home-active')" style="font-size: 13px; font-weight: bold;">HOME</h6>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <h6 style="font-size: 13px; font-weight: bold;">ABOUT</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h6 style="font-size: 13px; font-weight: bold;">SERVICES</h6>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h6 style="font-size: 13px; font-weight: bold;">PROJECTS</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h6 style="font-size: 13px; font-weight: bold;">BLOG</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recruitment">
                            <h6 class="@yield('recruitment-active')" style="font-size: 13px; font-weight: bold;">
                                RECRUITMENT</h6>
                        </a>
                    </li>

                    <li class="nav-item dropdown" style="margin-left: -30px;">
                        <a class="nav-link" data-toggle="dropdown" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {{-- <div class="urgent">
                                <h6 class="dropdown-header" style="text-align: center; color: #fff">Hiring</h6>
                                <a class="dropdown-item" href="/departments/web_development/view">Web Development</a>
                                <a class="dropdown-item" href="/departments/mobile_development/view">Mobile
                                    Development</a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header" style="text-align: center"> Departments</h6>
                            <a class="dropdown-item" href="/departments/accounting/view">Accounting</a>
                            <a class="dropdown-item" href="/departments/graphics/view">Graphic Design</a>
                            <a class="dropdown-item" href="/departments/admin/view">Admin</a>
                            <a class="dropdown-item" href="/departments/sales/view">Sales</a>
                            <a class="dropdown-item" href="/departments/quality_assurance/view">Quality Assurance</a> --}}
                            <h6 class="dropdown-header" style="text-align: center"> Departments</h6>
                            <a class="dropdown-item" href="/departments/admin/view">Admin</a>
                            <a class="dropdown-item" href="/departments/accounting/view">Accounting</a>
                            <a class="dropdown-item" href="/departments/graphics/view">Graphic Design</a>
                            <a class="dropdown-item" href="/departments/mobile_development/view">Mobile
                                Development</a>
                            <a class="dropdown-item" href="/departments/quality_assurance/view">Quality Assurance</a>
                            <a class="dropdown-item" href="/departments/sales/view">Sales</a>
                            <a class="dropdown-item" href="/departments/web_development/view">Web Development</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h6 style="font-size: 13px; font-weight: bold;">CONTACT</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                            style="background:#c8a40e; color: white; margin-right: 150px;">ENGAGE</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div>
        @yield('content')
    </div>

    <footer id="footer" class="footer-1">
        <div class="main-footer widgets-dark typo-light">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget subscribe no-box">
                            <p class="footer-header-text widget-title">Highly Succeed Inc,</p>
                            <ul>
                                <li>
                                    586-87-29
                                </li>
                                <li>
                                    support@highlysucceed.com
                                </li>
                            </ul>
                            <br>
                            <p>
                                <i class="fab fa-facebook-f"></i>
                                &nbsp
                                <i class="fab fa-twitter"></i>
                                &nbsp
                                <i class="fab fa-youtube"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                    </div>
                    <div class=" col-xs-12 col-sm-6 col-md-3">
                        <div class="widget no-box">
                            <p class="footer-header-text widget-title">Helpful Links</p>
                            <ul class="quick-links thumbnail-widget">
                                <li>
                                    <div class="thumb-content"><a href="/home">Home</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">About</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">Services</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">Projects</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">Blog</a></div>
                                </li>
                                <li>
                                    <div class="thumb-content"><a href="#.">Contact</a></div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="widget no-box">
                            <p class="footer-header-text widget-title">Subscribe to our newsletter</p>
                            <form class="newsletter">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Your name">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Your email">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row footer-copyright-inner">
                    <div>
                        <p><span id="all-rights">All rights reserved © 2019</span> <span id="copyright-hs">Highly
                                Succeed</span></p>
                    </div>
                    <div class="footer-copyright-links">
                        <a href="">Terms & Conditions</a>
                        &nbsp
                        <a href="">Privacy Policy</a>
                        &nbsp
                        <a href="">Help </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    @yield('script')
</body>

</html>
