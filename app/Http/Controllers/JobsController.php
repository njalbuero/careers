<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobileDevelopmentJob;
use App\Models\WebDevelopmentJob;
use App\Models\AdminJob;
use App\Models\SalesJob;
use App\Models\GraphicsJob;
use App\Models\QualityAssuranceJob;
use App\Models\AccountingJob;
use App\Models\Department;

class JobsController extends Controller
{
    function departmentModel($department){
        switch ($department) {
            case 'mobile_development':
                $model = MobileDevelopmentJob::class;
                break;
            case 'web_development':
                $model = WebDevelopmentJob::class;
                break;
            case 'quality_assurance':
                $model = QualityAssuranceJob::class;
                break;
            case 'graphics':
                $model = GraphicsJob::class;
                break;
            case 'sales':
                $model = SalesJob::class;
                break;
            case 'accounting':
                $model = AccountingJob::class;
                break;
            case 'admin':
                $model = AdminJob::class;
                break;
        }
        return $model;
    }
    public function index($department)
    {
        $departmentModel = $this->departmentModel($department);
        $jobs = $departmentModel::all()->where('disabled', '0');
        $department = Department::where('slug', $department)->first();
        return view('backoffice.listings.index', compact('department', 'jobs'));
    }

    public function create($department)
    {
        $department = Department::where('slug', $department)->first();
        return view('backoffice.listings.create', compact('department'));
    }

    public function store($department)
    {
        request()->validate([
            'title' => 'required',
            'employment_type' => 'required',
            'position_level' => 'required',
            'description' => 'required',
            'responsibilities' => 'required',
            'qualifications' => 'required',
            'salary_min' => 'required',
            'salary_max' => 'required'
        ]);
        $departmentModel = $this->departmentModel($department);
        $departmentModel::create([
            'title' => request('title'),
            'employment_type' => request('employment_type'),
            'position_level' => request('position_level'),
            'description' => request('description'),
            'responsibilities' => request('responsibilities'),
            'qualifications' => request('qualifications'),
            'salary_min' => request('salary_min'),
            'salary_max' => request('salary_max'),
            'department_id' => Department::where('slug', $department)->first()->id
        ]);
        return redirect()->action(
            [JobsController::class, 'index'], $department
        );
    }

    public function view($department, $job)
    {
        $departmentModel = $this->departmentModel($department);
        $job = $departmentModel::findOrFail($job);
        $department = Department::where('slug', $department)->first();
        return view('backoffice.listings.view', compact('department', 'job'));
    }

    public function edit($department, $job)
    {
        $departmentModel = $this->departmentModel($department);
        $job = $departmentModel::findOrFail($job);
        $department = Department::where('slug', $department)->first();
        return view('backoffice.listings.edit', compact('department', 'job'));
    }

    public function update($department, $job)
    {
        request()->validate([
            'title' => 'required',
            'employment_type' => 'required',
            'position_level' => 'required',
            'description' => 'required',
            'responsibilities' => 'required',
            'qualifications' => 'required',
            'salary_min' => 'required',
            'salary_max' => 'required'
        ]);
        $departmentModel = $this->departmentModel($department);
        $job = $departmentModel::findOrFail($job);
        $job->update([
            'title' => request('title'),
            'employment_type' => request('employment_type'),
            'position_level' => request('position_level'),
            'description' => request('description'),
            'responsibilities' => request('responsibilities'),
            'qualifications' => request('qualifications'),
            'salary_min' => request('salary_min'),
            'salary_max' => request('salary_max'),
            'department_id' => Department::where('slug', $department)->first()->id
        ]);
        return redirect()->action(
            [JobsController::class, 'index'], $department
        );
    }

    public function destroy($department, $job)
    {
        $departmentModel = $this->departmentModel($department);
        $job = $departmentModel::findOrFail($job);
        $job->update([
            'disabled' => '1'
        ]);
        return redirect()->action(
            [JobsController::class, 'index'], $department
        );
    }
}
