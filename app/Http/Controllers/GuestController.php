<?php

namespace App\Http\Controllers;
use App\Models\AdminJob;
use App\Models\SalesJob;
use App\Models\Department;
use App\Mail\ApplicantMail;
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
use Illuminate\Support\Facades\Mail;
use App\Models\WebDevelopmentApplicant;
use App\Models\QualityAssuranceApplicant;
use App\Models\MobileDevelopmentApplicant;


class GuestController extends Controller
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

    public function departmentView(Department $department){
        $jobModel = $this->jobModel($department->slug);
        $jobs = $jobModel::all()->where('disabled', '0');
        $jobs = $jobs->sortByDesc('created_at');
        return view('guest.department', compact('department', 'jobs'));
    }
    public function apply(Department $department, $job){
        $jobModel = $this->jobModel($department->slug);
        $job = $jobModel::findOrFail($job);
        return view('guest.applicant_form', compact('department', 'job'));
    }
    public function submit(Department $department, Request $req, $job)
    {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
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
            'position_id' => $jobModel::findOrFail($job)->id,
            'position' => $jobModel::findOrFail($job)->title
        ]);

        $details = [
            'name' => request('first_name') . " " . request('last_name'),
            'position' => $jobModel::findOrFail($job)->title
        ];
        $subject = $jobModel::findOrFail($job)->title . " Application - Highly Succeed Inc";
        Mail::to(request('email'))->send(new ApplicantMail($details, $subject));

       return view('guest.recruitment');
    }
}
