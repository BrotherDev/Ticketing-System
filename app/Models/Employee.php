<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $guard = 'admin';

    protected $table = 'employees';

    protected $fillable = [
        'company_id',
        'job_designation_id',
        'card_no',
        'barcod_no',
        'joining_date',
        'section',
        'shift',
        'grade',
        'weekend',
        'floor',
        'gross_salary',
        'name',
        'number',
        'email',
        'nid',
        'birth_certificate',
        'tin_number',
        'birth_date',
        'gender',
        'blood_group',
        'religion',
        'marital_status',
        'fathers_name',
        'mothers_name',
        'spouse_name',
        'husband_name',
        'fathers_nid',
        'fathers_number',
        'husband_nid',
        'husband_number',


    ];

    public function companies()
    {
        return $this->belongsTo(Company::class);
    }


    public function employeeHistories()
    {
        return $this->hasMany(EmployeeHistory::class);
    }
}
