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


class DashboardController extends Controller
{
    public function index()
    {
        $mobile_jobs_count = MobileDevelopmentJob::where('disabled', 0)->count();
        $web_jobs_count = WebDevelopmentJob::where('disabled', 0)->count();
        $qa_jobs_count = QualityAssuranceJob::where('disabled', 0)->count();
        $sales_jobs_count = SalesJob::where('disabled', 0)->count();
        $graphics_jobs_count = GraphicsJob::where('disabled', 0)->count();
        $accounting_jobs_count = AccountingJob::where('disabled', 0)->count();
        $admin_jobs_count = AdminJob::where('disabled', 0)->count();
        $mobile_applicants_count = MobileDevelopmentApplicant::where('disabled', 0)->count();
        $web_applicants_count = WebDevelopmentApplicant::where('disabled', 0)->count();
        $qa_applicants_count = QualityAssuranceApplicant::where('disabled', 0)->count();
        $sales_applicants_count = SalesApplicant::where('disabled', 0)->count();
        $graphics_applicants_count = GraphicsApplicant::where('disabled', 0)->count();
        $accounting_applicants_count = AccountingApplicant::where('disabled', 0)->count();
        $admin_applicants_count = AdminApplicant::where('disabled', 0)->count();
        $jobs_total_count = $mobile_jobs_count + $web_jobs_count +
            $qa_jobs_count + $sales_jobs_count + $graphics_jobs_count + $accounting_jobs_count + $admin_jobs_count;
        $applicants_total_count = $mobile_applicants_count + $web_applicants_count +
            $qa_applicants_count + $sales_applicants_count + $graphics_applicants_count + $accounting_applicants_count + $admin_applicants_count;

        return view('backoffice.dashboard.index', compact(
            'jobs_total_count',
            'applicants_total_count',
            'mobile_jobs_count',
            'web_jobs_count',
            'qa_jobs_count',
            'sales_jobs_count',
            'graphics_jobs_count',
            'accounting_jobs_count',
            'admin_jobs_count',
            'mobile_applicants_count',
            'web_applicants_count',
            'qa_applicants_count',
            'sales_applicants_count',
            'graphics_applicants_count',
            'accounting_applicants_count',
            'admin_applicants_count',
        ));
    }

    public function analytics(Department $department)
    {
        return view('backoffice.dashboard.charts', compact('department'));
    }


    public function create()
    {
    }

    public function store()
    {
    }

    public function view()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
