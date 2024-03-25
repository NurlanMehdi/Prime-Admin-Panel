<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    const STATUS_PRO_CANCELED = 'pro canceled';
    const STATUS_NEEDS_SCHEDULING = 'needs scheduling';
    const STATUS_COMPLETE_UNRATED = 'complete unrated';
    const STATUS_USER_CANCELED = 'user canceled';
    const STATUS_COMPLETE_RATED = 'complete rated';
    const STATUS_IN_PROGRESS = 'in progress';
    const STATUS_SCHEDULED = 'scheduled';

    protected $fillable = [
        'id','job_id', 'invoice_number', 'description', 'customer', 'address', 'notes', 'work_status',
        'work_timestamps', 'schedule', 'total_amount', 'outstanding_balance', 'assigned_employees',
        'tags', 'original_estimate_id', 'lead_source', 'job_fields', 'created_at', 'updated_at',
        'company_name', 'company_id'
    ];

    public function scopeInProgress($query)
    {
        return $query->where('work_status', self::STATUS_IN_PROGRESS);
    }

    public static function insertJob($data)
    {
        return self::create($data);
    }
}

