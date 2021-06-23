@extends('backoffice.layouts.main')

@section('title', $department->name)

@section($department->slug . '-show', 'show')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card spur-card">
                <div class="card-header bg-hsi text-white">
                    <div class="spur-card-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="spur-card-title"> Edit Job Applicant </div>
                </div>
                <div class="card-body ">
                    <form class="row g-3" method=POST
                        action="/backoffice/applicants/{{ $department->slug }}/{{ $applicant->id }}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-md-6 mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                value="{{ $applicant->first_name }}">
                            <div class="text-danger mt-2">@error('first_name')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                value="{{ $applicant->last_name }}">
                                <div class="text-danger mt-2">@error('last_name')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $applicant->email }}">
                                <div class="text-danger mt-2">@error('email')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="position" class="form-label">Position</label>
                            <select class="form-control" id="position_id" name="position_id">
                                @foreach ($jobs as $job)
                                    <option value="{{ $job->id }}" @if ($job->id == $applicant->position_id) selected = "selected" @endif>
                                        {{ $job->title }}({{ $job->position_level }}, {{ $job->employment_type }})
                                    </option>
                                @endforeach
                            </select>
                            <div class="text-danger mt-2">@error('position_id')
                                {{ $message }}
                            @enderror</div>
                        </div>
                        <div class="col-12 mt-2">
                            <button type="submit" class="btn btn-dark mr-2">Submit</button>
                            <a class="btn btn-light" href={{ url()->previous() }}>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
