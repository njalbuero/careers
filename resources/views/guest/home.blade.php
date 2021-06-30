@extends('guest.layouts.app')
@section('title' , 'Home')
@section('background', 'background.png')
@section('home-active', 'nav-active')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div id="demo1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/1.jpg')}}" alt="1" width="1450" height="600">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/2.jpg')}}" alt="2" width="1450" height="600">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/3.jpg')}}" alt="3" width="1450" height="600">
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo1" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo1" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="mt-5" id="demo" class="carousel slide" data-ride="carousel">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div style="margin-left: 10px;" class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col" style="background-color:transparent;">
                                <p>Highly Succeed Accounts Managers are very reachable, receptive on all the requests,
                                    hands-on, and very helpful.<br>
                                    Always meets our Business Requirements and we're very satisfied with it. They are one of
                                    our Trusted<br>
                                    Partner/Provider.</p>
                                <p class="text-warning"> Kristina Guevarra </p>
                                <p>Marketing Manager TGI Fridays Philippines</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col" style="background-color:transparent;">
                                <p>Highly Succeed Accounts Managers are very reachable, receptive on all the requests,
                                    hands-on, and very helpful.<br>
                                    Always meets our Business Requirements and we're very satisfied with it. They are one of
                                    our Trusted<br>
                                    Partner/Provider.</p>
                                <p class="text-warning"> Kristina Guevarra </p>
                                <p>Marketing Manager TGI Fridays Philippines</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                           
                            <div class="col" style="background-color:transparent;">
                                <p>Our professional relationship grew significantly because of the consistency
                                    and dyanmism of their team
                                </p>
                                <p class="text-warning">Ryan Leocario , M.A.Ed.</p>
                                <p>Head of Admissions, APEC Schools</p>
                            </div>
                        </div>
                    </div>
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h1 style="color: #caa40c;">What people say About us</h1>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset('images/transformurbusiness.png')}}" width="710px;">
        </div>
        <div class="col-md-6">
            <video onclick="this.play()" style="margin-left: -7px; margin-top: -14px;" width="690" height="620"
                poster="{{asset('images/videoposter.png')}}">
                <source src="{{asset('images/company_profile.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <h1 style="color: #caa40c;">
            <center> Services We Provided</center>
        </h1>
        <br>
        <br>
        <div class="row justfiy-content-center">
            <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="images/s1.png" alt="Card image cap">
                </div><br>
                <h5 style="color: #caa40c;" class="card-title">Office 365 Deployment</h5>
                <p class="card-text" style="text-align:center; color: gray;">Stay up-to-date and keep your productivity
                    streak with Office 365 from Microsoft.</p>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="images/s2.png" alt="Card image cap">
                </div>
                <br>
                <h5 style="color: #caa40c;" class="card-title">Website Development</h5>
                <p class="card-text" style="text-align:center; color: gray;">Establish your brand’s online presence with a
                    website custom-made to your liking.</p>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="images/s3.png" alt="Card image cap">
                </div>
                <br>
                <h5 style="color: #caa40c;" class="card-title">Mobile App Development</h5>
                <p class="card-text" style="text-align:center; color: gray;">Utilize your applications anytime and anywhere.
                    Thank us later.</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row justfiy-content-center">
            <div class="col-md-4">
                <div class="card" style="border-radius: 5px;" style="width: 22rem;">
                    <img class="card-img-top" src="images/s4.png" alt="Card image cap">
                </div><br>
                <h5 style="color: #caa40c;" class="card-title">Digital Marketing</h5>
                <p class="card-text" style="text-align:center; color: gray;">Integrating information to endorse our product.
                    Advertising through trend setting social media and information laying SEO's (Search Engine...</p>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="{{asset('images/s5.png')}}" alt="Card image cap">
                </div>
                <br>
                <h5 style="color: #caa40c;" class="card-title">Graphics Design & Multimedia</h5>
                <p class="card-text" style="text-align:center; color: gray;">We’ll help your sole imagination turn into a
                    visual that can be seen by many.</p>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="{{asset('images/s6.png')}}" alt="Card image cap">
                </div>
                <br>
                <h5 style="color: #caa40c;" class="card-title">Cloud Infrastracture</h5>
                <p class="card-text" style="text-align:center; color: gray;">Bringing you the latest trend of cloud-storage
                    for stability and long-term adaptability.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container latest-news-container">
        <h1 class="text-center">Latest News</h1>
        <div class="d-flex justify-content-center text-center">
            <div>
                <img src="{{asset('images/first_news.jpg')}}" alt="">
                <h5>6 Reasons Why a Website is Important for your Business</h5>
                <p>Website importance for business A simple question, What is a website? In its bare form, a website is...
                </p>
            </div>
            <div>
                <img src="{{asset('images/second_news.jpg')}}" alt="">
                <h5>5 Reasons Why Every Business Needs a Website</h5>
                <p>1. Having a website will attract new customers to your business and make you more money.We like this...
                </p>
            </div>
            <div>
                <img src="{{asset('images/third_news.jpg')}}" alt="">
                <h5>KROPS: Crop in hand, how a cloud-based application brings farmers closer to end users</h5>
                <p>If ever there was a time for technology to assist in how the global population produces, trades and...
                </p>
            </div>
        </div>
    </div>
@endsection
