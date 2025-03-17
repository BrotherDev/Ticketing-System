<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeHistory extends Model
{

    protected $guard = 'admin';

    protected $table = 'employee_histories';

    protected $fillable = [
        'incident_type',
        'incident_date',
        'incident_description',
        'incident_description_file',
        'reported_by',
        'investigation_office',
        'investigation_summary',
        'incident_prove_photo',
        'action_taken',
        'action_taken_by',
        'action_date',
        'notes',
        'employees_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employees_id');
    }
}
