@extends('guest.layouts.app')
@section('background', 'background.png')
@section('recruitment-active', 'nav-active')

@section('style')
    <link rel="stylesheet" href="css/recruitment.css">

@endsection

@section('content')
    <div class="page-banner">
        <img src="images/banner.jpg" class="img-fluid" alt="Responsive image">
        <div class="centered">
            <h1>Recruitment</h1>
        </div>
    </div>

    <div class="container departments-container">
        <h1 class="text-center">Our Departments</h1>
        <div class="row">
            <div class="d-flex justify-content-center text-center">
                <div>
                    <a href="/departments/web_development/view">
                        <img src="images/dev.jpg" alt="Web Development">
                        <h5>Web Development</h5>
                    </a>
                    <p>Our developers are responible for directing and participating in programming activities, monitoring,
                        and evaluating system performance, and designing and implementing new programs and features.</p>
                </div>
                <div>
                    <a href="/departments/quality_assurance/view">
                        <img src="images/qa.jpg" alt="">
                        <h5>Quality Assurance</h5>
                    </a>
                    <p>The main goal of our Quality Assurance (QA) department is to help create a quality product. They
                        ensure the high quality of the development process and its results. </p>
                </div>
                <div>
                    <a href="/departments/admin/view">
                        <img src="images/admin.jpg" alt="">
                        <h5>Admin</h5>
                    </a>
                    <p>They act as a connecting link between the senior management and the employees. They provide
                        motivation to the work force and make them realize the goals of the organization.</p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center text-center">
                <div>
                    <a href="/departments/sales/view">
                        <img src="images/sales2.jpg" alt="">
                        <h5>Sales</h5>
                    </a>
                    <p>Our sales department helps the company run effectively, efficiently and in support of business
                        strategies and
                        objectives.</p>
                </div>
                <div>
                    <a href="/departments/mobile_development/view">
                        <img src="images/techops.jpg" alt="">
                        <h5>Technical Operations</h5>
                    </a>
                    <p>They are responsible for planning, coordinating and executing all technical components of a project.
                    </p>
                </div>
                <div>
                    <a href="/departments/graphics/view">
                        <img src="images/graphic_design.jpg" alt="">
                        <h5>Graphics</h5>
                    </a>
                    <p>Our graphic designers create visual communications to convey messages in an effective and
                        aesthetically pleasing manner.
                    </p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-start text-center flex-wrap">
                <div>
                    <a href="/departments/accounting/view">
                        <img src="images/accounting.jpg" alt="">
                        <h5>Accounting</h5>
                    </a>
                    <p style="width: 400px">The accounting department miantains a systematic, accurate and complete record
                        of all our financial transactions.</p>
                </div>
            </div>
        </div>
    </div>


@endsection
