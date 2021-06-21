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
        return view('backoffice.dashboard.index', compact('mobile_jobs', 'web_jobs', 'qa_jobs', 'sales_jobs', 'graphics_jobs', 'accounting_jobs', 'admin_jobs'));
    }

    public function analytics($department)
    {
        $department = Department::where('slug', $department)->first();
        return view('backoffice.dashboard.charts', compact('department'));
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function view($department, $listing)
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
