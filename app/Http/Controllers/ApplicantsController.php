<?php

namespace App\Http\Controllers;

use App\Models\AdminJob;
use App\Models\SalesJob;
use App\Models\Department;
use App\Models\GraphicsJob;
use Illuminate\Http\Request;
use App\Models\AccountingJob;
use Illuminate\Http\Response;
use App\Models\AdminApplicant;
use App\Models\SalesApplicant;
use App\Models\GraphicsApplicant;
use App\Models\WebDevelopmentJob;
use App\Models\AccountingApplicant;
use App\Models\QualityAssuranceJob;
use App\Models\MobileDevelopmentJob;
use App\Models\WebDevelopmentApplicant;
use App\Models\QualityAssuranceApplicant;
use App\Models\MobileDevelopmentApplicant;

class ApplicantsController extends Controller
{
    function jobModel($department)
    {
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
    function applicantModel($department)
    {
        switch ($department) {
            case 'mobile_development':
                $model = MobileDevelopmentApplicant::class;
                break;
            case 'web_development':
                $model = WebDevelopmentApplicant::class;
                break;
            case 'quality_assurance':
                $model = QualityAssuranceApplicant::class;
                break;
            case 'graphics':
                $model = GraphicsApplicant::class;
                break;
            case 'sales':
                $model = SalesApplicant::class;
                break;
            case 'accounting':
                $model = AccountingApplicant::class;
                break;
            case 'admin':
                $model = AdminApplicant::class;
                break;
        }
        return $model;
    }

    public function all(){
        $mobile_applicants = MobileDevelopmentApplicant::all()->where('disabled', '0');
        $web_applicants = WebDevelopmentApplicant::all()->where('disabled', '0');
        $qa_applicants = QualityAssuranceApplicant::all()->where('disabled', '0');
        $sales_applicants = SalesApplicant::all()->where('disabled', '0');
        $graphics_applicants = GraphicsApplicant::all()->where('disabled', '0');
        $accounting_applicants = AccountingApplicant::all()->where('disabled', '0');
        $admin_applicants = AdminApplicant::all()->where('disabled', '0');
        $applicants = $mobile_applicants->concat($web_applicants)->concat($qa_applicants)->concat($sales_applicants)->concat($graphics_applicants)->concat($accounting_applicants)->concat($admin_applicants);
        return view('backoffice.applicants.all', compact('applicants'));
    }

    public function index(Department $department)
    {
        $applicantModel = $this->applicantModel($department->slug);
        $applicants = $applicantModel::all()->where('disabled', '0');
        return view('backoffice.applicants.index', compact('department', 'applicants'));
    }

    public function create(Department $department)
    {
        $jobModel = $this->jobModel($department->slug);
        $jobs = $jobModel::all()->where('disabled', '0');
        return view('backoffice.applicants.create', compact('department', 'jobs'));
    }

    public function store(Department $department, Request $req)
    {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'position_id' => 'required',
            'file' => 'required|mimes:pdf|max:2048'
        ]);

        if ($req->file()) {
            $fileName = time() . '_' . $req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('storage', $fileName, 'public');
            $req->file->move('uploads', $fileName);
        }

        $jobModel = $this->jobModel($department->slug);
        $applicantModel = $this->applicantModel($department->slug);
        $applicantModel::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'file' => $fileName,
            'position_id' => request('position_id'),
            'position' => $jobModel::findOrFail(request('position_id'))->title
        ]);
        return redirect()->action(
            [ApplicantsController::class, 'index'],
            $department->slug
        );
    }

    public function view(Department $department, $applicant)
    {
        $applicantModel = $this->applicantModel($department->slug);
        $applicant = $applicantModel::findOrFail($applicant);
        $fileName = $applicant->file;
        if(file_exists(public_path('uploads/' . $fileName))){
            return response()->download(public_path('uploads/' . $fileName));
        }
    }

    public function edit(Department $department, $applicant)
    {
        $jobModel = $this->jobModel($department->slug);
        $jobs = $jobModel::all()->where('disabled', '0');
        $applicantModel = $this->applicantModel($department->slug);
        $applicant = $applicantModel::findOrFail($applicant);
        return view('backoffice.applicants.edit', compact('department', 'applicant', 'jobs'));
    }

    public function update(Department $department, $applicant)
    {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'position_id' => 'required',
        ]);
        $jobModel = $this->jobModel($department->slug);
        $applicantModel = $this->applicantModel($department->slug);
        $applicant = $applicantModel::findOrFail($applicant);
        $applicant->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'position_id' => request('position_id'),
            'position' => $jobModel::findOrFail(request('position_id'))->title
        ]);
        return redirect()->action(
            [ApplicantsController::class, 'index'],
            $department->slug
        );
    }

    public function destroy(Department $department, $applicant)
    {
        $applicantModel = $this->applicantModel($department->slug);
        $applicant = $applicantModel::findOrFail($applicant);
        $applicant->update([
            'disabled' => '1'
        ]);
        return redirect()->action(
            [ApplicantsController::class, 'index'],
            $department->slug
        );
    }
}
