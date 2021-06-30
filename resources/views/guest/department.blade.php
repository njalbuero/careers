@extends('guest.layouts.app')
@section('background', 'background.png')
@section('recruitment-active', 'nav-active')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/recruitment.css') }}">
@endsection

@section('content')
    <div class="page-banner">
        <img src="{{ asset('images/banner.jpg') }}" style="width:100%; height: 250px;" class="img-fluid"
            alt="Responsive image">
        <div class="centered">
            <h1>{{ $department->name }}</h1>
        </div>
    </div>
    <br>
    <br>
    <br>
    @if (count($jobs))
        @foreach ($jobs as $job)
            <div class="row" style="padding-left:50px;">
                <div class="col-md-4">
                    <div class="jumbotron" style="background-color: rgba(202, 164, 12, 0.2); ">
                        <h4 style="font-weight: bold; color: #444548;">{{ $job->title }}</h4>
                        <p>{{ $job->position_level }}</p>
                        <p>{{ $job->employment_type }}</p>
                        <p>₱ {{ $job->salary_min }} - {{ $job->salary_max }}</p>
                    </div>
                </div>
                <br>
                <div class="col-md-auto">
                    <div class="jumbotron" style="width: 850px; background-color: rgba(202, 164, 12, 0.2);">
                        <div style=" width: 818px; overflow: auto; ">
                            <h2 style="color: #444548;"><b>{{ $job->title }}</b></h2>
                            <div>
                                <h5>Salary: ₱ {{ $job->salary_min }} - {{ $job->salary_max }}</h5>
                                <h5 style="font-size:14px;">Position Level: {{ $job->position_level }}</h5>
                                <h5 style="font-size:14px;">Employment Type: {{ $job->employment_type }}</h5>
                            </div><br>

                            <strong>Job Description:</strong>
                            <p style="padding-left: 10px;">{{ $job->description }}</p>
                            <strong> Responsibilities </strong>
                            <p style="padding-left: 10px;">{{ $job->responsibilities }}</p>
                            <strong>Qualifications</strong><br>
                            <p style="padding-left: 10px;">{{ $job->qualifications }}</p>
                            <center>
                                <a href="/departments/{{ $department->slug }}/{{ $job->id }}/apply" id="btnapply"
                                    type="button" class="btn btn-dark" style="border-radius: 25px; 
                                                                        padding: 8px 100px 2px 100px;
                                                                        background-color: #caa40c;
                                                                        border-color: #caa40c;
                                                                        margin-right: 50px;
                                                                        color: black; ">
                                    <h6>Apply now</h6>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
    @else
            <div class="text-center my-5">
                Not Hiring
            </div>
    @endif

@endsection
