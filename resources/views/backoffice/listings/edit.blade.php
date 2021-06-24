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
                    <div class="spur-card-title"> Edit Job Listing </div>
                </div>
                <div class="card-body ">
                    <form class="row g-3" method=POST
                        action="/backoffice/listings/{{ $department->slug }}/{{ $job->id }}">
                        @method('PUT')
                        @csrf
                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $job->title }}">
                            <div class="text-danger mt-2">@error('title')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="salary_min" class="form-label">Minimum Salary</label>
                            <input type="number" class="form-control" id="salary_min" name="salary_min"
                                value="{{ $job->salary_min }}">
                            <div class="text-danger mt-2">@error('salary_min')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="salary_max" class="form-label">Maximum Salary</label>
                            <input type="number" class="form-control" id="salary_max" name="salary_max"
                                value="{{ $job->salary_max }}">
                            <div class="text-danger mt-2">@error('salary_max')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="position_level" class="form-label">Position Level</label>
                            <input type="text" class="form-control" id="position_level" name="position_level"
                                value="{{ $job->position_level }}">
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
                            <textarea class="form-control" id="description" name="description"
                                rows="5">{{ $job->description }}</textarea>
                            <div class="text-danger mt-2">@error('description')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="responsibilities" class="form-label">Responsibilities</label>
                            <textarea class="form-control" id="responsibilities" name="responsibilities"
                                rows="5">{{ $job->responsibilities }}</textarea>
                            <div class="text-danger mt-2">@error('responsibilities')
                                    {{ $message }}
                                @enderror</div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="qualifications" class="form-label">Qualifications</label>
                            <textarea class="form-control" id="qualifications" name="qualifications"
                                rows="5">{{ $job->qualifications }}</textarea>
                            <div class="text-danger mt-2">@error('qualifications')
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
        const employment_type = {!! json_encode($job->employment_type) !!};
        document.getElementById("employment_type").value = employment_type;
    </script>
@endsection
