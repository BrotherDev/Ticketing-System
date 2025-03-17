<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobDesignation extends Model
{
    protected $guard = 'admin';

    protected $table = 'job_designations';

    protected $fillable = [
        'designation_division',
        'designation_name',
    ];

    public function companies()
    {
        return $this->hasMany(Company::class, 'job_designations');
    }
}
