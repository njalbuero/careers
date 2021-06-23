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
        $mobile_jobs = MobileDevelopmentJob::where('disabled', 0)->count();
        $web_jobs = WebDevelopmentJob::where('disabled', 0)->count();
        $qa_jobs = QualityAssuranceJob::where('disabled', 0)->count();
        $sales_jobs = SalesJob::where('disabled', 0)->count();
        $graphics_jobs = GraphicsJob::where('disabled', 0)->count();
        $accounting_jobs = AccountingJob::where('disabled', 0)->count();
        $admin_jobs = AdminJob::where('disabled', 0)->count();
        $mobile_applicants = MobileDevelopmentApplicant::where('disabled', 0)->count();
        $web_applicants = WebDevelopmentApplicant::where('disabled', 0)->count();
        $qa_applicants = QualityAssuranceApplicant::where('disabled', 0)->count();
        $sales_applicants = SalesApplicant::where('disabled', 0)->count();
        $graphics_applicants = GraphicsApplicant::where('disabled', 0)->count();
        $accounting_applicants = AccountingApplicant::where('disabled', 0)->count();
        $admin_applicants = AdminApplicant::where('disabled', 0)->count();
        return view('backoffice.dashboard.index', compact(
            'mobile_jobs',
            'web_jobs',
            'qa_jobs',
            'sales_jobs',
            'graphics_jobs',
            'accounting_jobs',
            'admin_jobs',
            'mobile_applicants',
            'web_applicants',
            'qa_applicants',
            'sales_applicants',
            'graphics_applicants',
            'accounting_applicants',
            'admin_applicants',
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
