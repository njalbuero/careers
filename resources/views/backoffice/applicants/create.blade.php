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
                    <div class="spur-card-title"> Create Job Applicant </div>
                </div>
                <div class="card-body ">
                    <form class="row g-3" method=POST action="/backoffice/applicants/{{ $department->slug }}"
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
                        <div class="col-md-6 mb-3">
                            <label for="position_id" class="form-label">Position</label>
                            <select class="form-control" id="position_id" name="position_id">
                                @foreach ($jobs as $job)
                                    <option value="{{$job->id}}">{{$job->title}}({{$job->position_level}}, {{$job->employment_type}})</option>
                                @endforeach
                            </select>
                            <div class="text-danger mt-2">@error('position_id')
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
                        <div class="col-12 mt-2">
                            <button type="submit" class="btn btn-warning text-white mr-2">Submit</button>
                            <a class="btn btn-danger" href={{ url()->previous() }}>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
