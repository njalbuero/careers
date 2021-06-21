@extends('backoffice.layouts.main')

@section('title', $department->name)

@section($department->slug . '-show', 'show')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary mb-3" href={{ url()->previous() }}>Back</a>
            <div class="card spur-card">
                <div class="card-header bg-info text-white">
                    <div class="spur-card-icon">
                        <i class="far fa-eye"></i>
                    </div>
                    <div class="spur-card-title">Job Listing</div>
                </div>
                <div class="card-body">
                    <h3>Title</h3>
                    <p>{{ $job->title }}</p>
                    <h3>Employment Type</h3>
                    <p>{{ $job->employment_type }}</p>
                    <h3>Position Level</h3>
                    <p>{{ $job->position_level }}</p>
                    <h3>Description</h3>
                    <p>{!! nl2br(e($job->description)) !!}</p>
                    <h3>Responsibilities</h3>
                    <p>{!! nl2br(e($job->responsibilities)) !!}</p>
                    <h3>Qualifications</h3>
                    <p>{{ $job->qualifications }}</p>
                    <h3>Salary</h3>
                    <p>{{ $job->salary_min }} - {{ $job->salary_max }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection


