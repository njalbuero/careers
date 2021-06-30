@extends('guest.layouts.app')
@section('background', 'background.png')
@section('recruitment-active', 'nav-active')
@section('style')
    <link rel="stylesheet" href="{{asset('css/recruitment.css')}}">
@endsection

@section('content')
    <div class="page-banner">
        <img src="{{ asset('images/banner.jpg') }}" class="img-fluid" alt="Responsive image">
        <div class="centered">
            <h1>Apply</h1>
        </div>
    </div>
    <div class="container">
        <div class="mt-5 mb-5">
            <h1>Applying for {{ $job->title }}</h1>
        </div>
        <form class="row g-3" method=POST action="/departments/{{ $department->slug }}/{{ $job->id }}/"
            enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
                <div class="text-danger mt-2">@error('first_name')
                        {{ $message }}
                    @enderror</div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
                <div class="text-danger mt-2">@error('last_name')
                        {{ $message }}
                    @enderror</div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <div class="text-danger mt-2">@error('email')
                        {{ $message }}
                    @enderror</div>
            </div>
            <div class="col-6 mb-3">
                <label for="position" class="form-label">Resume</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file" name="file">
                    <label class="custom-file-label" for="file">Select file</label>
                </div>
                <div class="text-danger mt-2">@error('file')
                        {{ $message }}
                    @enderror</div>
            </div>
            <div class="col-12 mt-5 mb-5">
                <button type="submit" class="btn btn-primary text-white mr-2">Submit</button>
                <a class="btn btn-danger" href={{ url()->previous() }}>Cancel</a>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $('.custom-file-label').html(fileName);
        });
    </script>
@endsection
