<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class FactoryCertification extends Model
{

    protected $guard = 'admin';


    use HasFactory;

    protected $table = 'factory_certifications';

    protected $fillable = [
        'factory_certification_name',
        'factory_certification',
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_factory_certification', 'factory_certification_id', 'company_id');
    }
}
