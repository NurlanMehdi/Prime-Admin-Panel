<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Services\ApiService;
use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    private $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    
    public function insertAllJobs()
    {
        $pageSize = 200;
    
        for ($currentPage = 1; $currentPage <= 200; $currentPage++) {
        
            $jobs = $this->apiService->get("jobs?page=".$currentPage."&page_size=200");
    
            if ($jobs->successful()) {
                foreach ($jobs->json()['jobs'] as $job) {

                    $jobId = Job::where('job_id', $job["id"])->value('id');

                    if(!$jobId)
                    {
                        $data = [
                            "job_id" => $job["id"],
                            "invoice_number" => $job["invoice_number"],
                            "description" => $job["description"],
                            "customer" => json_encode($job["customer"]),
                            "address" => json_encode($job["address"]),
                            "notes" => json_encode($job["notes"]),
                            "work_status" => $job["work_status"],
                            "work_timestamps" => json_encode($job["work_timestamps"]),
                            "schedule" => json_encode($job["schedule"]),
                            "total_amount" => $job["total_amount"],
                            "outstanding_balance" => $job["outstanding_balance"],
                            "assigned_employees" => json_encode($job["assigned_employees"]),
                            "tags" => json_encode($job["tags"]),
                            "original_estimate_id" => $job["original_estimate_id"],
                            "lead_source" => $job["lead_source"],
                            "job_fields" => json_encode($job["job_fields"]),
                            "created_at" => $job["created_at"],
                            "updated_at" => $job["updated_at"],
                            "company_name" => $job["company_name"],
                            "company_id" => $job["company_id"],
                        ];
        
                 
                        Job::insertJob($data);
                    }
             
                }
            } else {
                return "Error while fetching jobs from API.";
            }
        }

        return "Jobs successfully inserted.";
    }
}
