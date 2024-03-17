<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'job_id', 'invoice_number', 'description', 'customer', 'address', 'notes', 'work_status',
        'work_timestamps', 'schedule', 'total_amount', 'outstanding_balance', 'assigned_employees',
        'tags', 'original_estimate_id', 'lead_source', 'job_fields', 'created_at', 'updated_at',
        'company_name', 'company_id'
    ];

    public static function insertJob($data)
    {
        return self::create($data);
    }
}

