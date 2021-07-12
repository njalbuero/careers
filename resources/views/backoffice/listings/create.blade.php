@extends('backoffice.layouts.main')

@section('title', $department->name)

@section($department->slug . '-show', 'show')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card spur-card">
                <div class="card-header">
                    <div class="spur-card-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="spur-card-title"> Create Job Listing </div>
                </div>
                <div class="card-body ">
                    <form class="row g-3" method=POST action="/backoffice/listings/{{ $department->slug }}">
                        @csrf
                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label">Title </label>
                            <input type="text" class="form-control" id="title" name="title">
                            <div class="text-danger mt-2">@error('title')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="salary_min" class="form-label">Minimum Salary</label>
                            <input type="number" class="form-control" id="salary_min" name="salary_min">
                            <div class="text-danger mt-2">@error('salary_min')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="salary_max" class="form-label">Maximum Salary</label>
                            <input type="number" class="form-control" id="salary_max" name="salary_max">
                            <div class="text-danger mt-2">@error('salary_max')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="position_level" class="form-label">Position Level</label>
                            <input type="text" class="form-control" id="position_level" name="position_level">
                            <div class="text-danger mt-2">@error('position_level')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="employment_type">Employment Type</label>
                            <select class="form-control" id="employment_type" name="employment_type">
                                <option value="Full-Time">Full-Time</option>
                                <option value="Part-Time">Part-Time</option>
                            </select>
                            <div class="text-danger mt-2">@error('employment_type')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                            <div class="text-danger mt-2">@error('description')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="responsibilities" class="form-label">Responsibilities</label>
                            <textarea class="form-control" id="responsibilities" name="responsibilities"
                                rows="5"></textarea>
                            <div class="text-danger mt-2">@error('responsibilities')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="qualifications" class="form-label">Qualifications</label>
                            <textarea class="form-control" id="qualifications" name="qualifications" rows="5"></textarea>
                            <div class="text-danger mt-2">@error('qualifications')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-12 mt-2">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a class="btn btn-danger" href={{ url()->previous() }}>Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
