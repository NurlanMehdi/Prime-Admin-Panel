<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job; 

class SchedulingPanelController extends Controller
{
    public function jobSearch()
    {
        return view('pages.schedulingPanel.jobSearch');
    }

    public function filterForJob(Request $request)
    {

        try {
            // Get the form data
            $adminJobId = $request->input('adminJobId');
            $invoiceNumber = $request->input('invoiceNumber');
            $referanceId = $request->input('referanceId');
        
            // Create an empty collection to store filtered jobs instead of operating on an empty array
            $filteredJobs = collect();
        
            // Perform query based on the relevant input field
            if (!empty($adminJobId)) {
                $filteredJobs = Job::where('id', $adminJobId)->first();
            } elseif (!empty($invoiceNumber)) {
                $filteredJobs = Job::where('invoice_number', $invoiceNumber)->first();
            } elseif (!empty($referanceId)) {
                $filteredJobs = Job::where('referance_id', $referanceId)->first();
            }
        
            // Return the filtered jobs
            return response()->json(['success' => true, 'jobs' => $filteredJobs]);
        } catch (\Exception $e) {
            // If an exception occurs, return an error JSON response
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
        
    }

    public function InProgressJobs() {
        return view('pages.schedulingPanel.inProgressJobs.index');
    }

    public function requestJobAuthorization() {
        return view('pages.schedulingPanel.requestJobAuthorization.index');
    }

    public function pendingRequestJobAuthorization() {
        return view('pages.schedulingPanel.requestJobAuthorization.pendingRequestJobAuthorization');
    }

    public function authorizationProfileDetails() {
        return view('pages.schedulingPanel.requestJobAuthorization.authorizationProfileDetails');
    }

    public function newJobInquiries()
    {
        $inProgressJobs = Job::inProgress()->paginate(10);

        return view('pages.schedulingPanel.newJobInquiries', ['jobs' => $inProgressJobs]);
    }

    public function callDetails($edit, $key = null,$jobId= null)
    {
        $job = Job::where('id', $jobId)->first();
        $edit = $edit !== "false" ? $edit : false;
    
        return view('pages.schedulingPanel.callDetails', compact('edit', 'key','job'));
    }
}
