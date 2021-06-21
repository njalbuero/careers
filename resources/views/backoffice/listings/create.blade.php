@extends('backoffice.layouts.main')

@section('title', $department->name)

@section($department->slug . '-show', 'show')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card spur-card">
                <div class="card-header bg-success text-white">
                    <div class="spur-card-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="spur-card-title"> Create Job Listing </div>
                </div>
                <div class="card-body ">
                    <form method=POST action="/backoffice/listings/{{$department->slug}}">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Employment Type</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="employment_type"
                                            id="et_part_time" value="Part-Time">
                                        <label class="form-check-label" for="et_part_time">Part-Time</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="employment_type"
                                            id="et_full_time" value="Full-Time">
                                        <label class="form-check-label" for="et_full_time">Full-Time</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <label for="position_level" class="col-sm-2 col-form-label">Position Level</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="position_level" name="position_level">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="responsibilities" class="col-sm-2 col-form-label">Responsibilities</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="responsibilities" name="responsibilities"
                                    rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="qualifications" class="col-sm-2 col-form-label">Qualifications</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="qualifications" name="qualifications"
                                    rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="salary_min" class="col-sm-2 col-form-label">Minimum Salary</label>
                            <div class="col-sm-10 col-lg-3">
                                <input type="number" class="form-control" id="salary_min" name="salary_min">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="salary_max" class="col-sm-2 col-form-label">Maximum Salary</label>
                            <div class="col-sm-10 col-lg-3">
                                <input type="number" class="form-control" id="salary_max" name="salary_max">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 mt-2">
                                <button type="submit" class="btn btn-primary mr-2">Create</button>
                                <a class="btn btn-danger" href={{ url()->previous() }}>Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
