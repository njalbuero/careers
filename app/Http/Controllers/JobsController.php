<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\AccountingJob;
use App\Models\AdminJob;
use App\Models\GraphicsJob;
use App\Models\MobileDevelopmentJob;
use App\Models\QualityAssuranceJob;
use App\Models\SalesJob;
use App\Models\WebDevelopmentJob;
use App\Models\AccountingApplicant;
use App\Models\AdminApplicant;
use App\Models\GraphicsApplicant;
use App\Models\MobileDevelopmentApplicant;
use App\Models\QualityAssuranceApplicant;
use App\Models\SalesApplicant;
use App\Models\WebDevelopmentApplicant;


class JobsController extends Controller
{
    function jobModel($department){
        switch ($department) {
            case 'accounting':
                $model = AccountingJob::class;
                break;
            case 'admin':
                $model = AdminJob::class;
                break;
            case 'graphics':
                $model = GraphicsJob::class;
                break;
            case 'mobile_development':
                $model = MobileDevelopmentJob::class;
                break;
            case 'quality_assurance':
                $model = QualityAssuranceJob::class;
                break;
            case 'sales':
                $model = SalesJob::class;
                break;
            case 'web_development':
                $model = WebDevelopmentJob::class;
                break;
        }
        return $model;
    }

    public function all(){
        $mobile_jobs = MobileDevelopmentJob::all()->where('disabled', '0');
        $web_jobs = WebDevelopmentJob::all()->where('disabled', '0');
        $qa_jobs = QualityAssuranceJob::all()->where('disabled', '0');
        $sales_jobs = SalesJob::all()->where('disabled', '0');
        $graphics_jobs = GraphicsJob::all()->where('disabled', '0');
        $accounting_jobs = AccountingJob::all()->where('disabled', '0');
        $admin_jobs = AdminJob::all()->where('disabled', '0');
        $jobs = $mobile_jobs->concat($web_jobs)->concat($qa_jobs)->concat($sales_jobs)->concat($graphics_jobs)->concat($accounting_jobs)->concat($admin_jobs);
        $jobs = $jobs->sortByDesc('created_at');
        return view('backoffice.listings.all', compact('jobs'));
    }
    
    public function index(Department $department)
    {   
        $jobModel = $this->jobModel($department->slug);
        $jobs = $jobModel::all()->where('disabled', '0');
        $jobs = $jobs->sortByDesc('created_at');
        return view('backoffice.listings.index', compact('department', 'jobs'));
    }

    public function create(Department $department)
    {
        return view('backoffice.listings.create', compact('department'));
    }

    public function store(Department $department)
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
        $jobModel = $this->jobModel($department->slug);
        $jobModel::create([
            'title' => request('title'),
            'employment_type' => request('employment_type'),
            'position_level' => request('position_level'),
            'description' => request('description'),
            'responsibilities' => request('responsibilities'),
            'qualifications' => request('qualifications'),
            'salary_min' => request('salary_min'),
            'salary_max' => request('salary_max'),
            'department_id' => $department->id
        ]);
        return redirect()->action(
            [JobsController::class, 'index'], $department->slug
        );
    }

    public function view(Department $department, $job)
    {
        $jobModel = $this->jobModel($department->slug);
        $job = $jobModel::findOrFail($job);
        return view('backoffice.listings.view', compact('department', 'job'));
    }

    public function edit(Department $department, $job)
    {
        $jobModel = $this->jobModel($department->slug);
        $job = $jobModel::findOrFail($job);
        return view('backoffice.listings.edit', compact('department', 'job'));
    }

    public function update(Department $department, $job)
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
        $jobModel = $this->jobModel($department->slug);
        $job = $jobModel::findOrFail($job);
        $job->update([
            'title' => request('title'),
            'employment_type' => request('employment_type'),
            'position_level' => request('position_level'),
            'description' => request('description'),
            'responsibilities' => request('responsibilities'),
            'qualifications' => request('qualifications'),
            'salary_min' => request('salary_min'),
            'salary_max' => request('salary_max'),
            'department_id' => $department->id
        ]);
        return redirect()->action(
            [JobsController::class, 'index'], $department->slug
        );
    }

    public function destroy(Department $department, $job)
    {
        $jobModel = $this->jobModel($department->slug);
        $job = $jobModel::findOrFail($job);
        $job->update([
            'disabled' => '1'
        ]);
        return redirect()->action(
            [JobsController::class, 'index'], $department->slug
        );
    }
}
