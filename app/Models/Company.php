<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    protected $guard = 'admin';

    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
        'company_name',
        'bgmea_reg_no',
        'epb_reg_no',
        'job_designations_id',
        'name',
        'number',
        'email',
        'mailling_address',
        'office_address',
        'office_number',
        'fax_number',
        'office_email',
        'office_number_one',
        'office_number_two',
        'fax_number_two',
        'factory_address',
        'establishment',
        'prioritys_id',
        'management_employees',
        'male_employees',
        'female_employees',
        'total_employees',
        'total_machines',
        'factory_email',
        'production_capacity',
        'annual_turnover_year',
        'annual_turnover',
        'website',
        'company_logo',
        'factory_types_id',
        'factory_certifications_id',
        'exportable_products_id',
        'factory_zones_id',
        'users_id',
        'admins_id'
    ];


    public function factoryZone()
    {
        return $this->belongsTo(FactoryZone::class, 'factory_zones_id');
    }

    public function jobDesignation()
    {
        return $this->belongsTo(JobDesignation::class, 'job_designations_id');
    }


    // Relationship with FactoryType
    public function factoryType()
    {
        return $this->belongsToMany(FactoryType::class, 'company_factory_type', 'company_id', 'factory_type_id');
    }

    // Define the priority relationship
    public function priorities()
    {
        return $this->belongsToMany(Priority::class, 'company_priority', 'company_id', 'priority_id');
    }


    // Relationship with ExportableProduct
    public function exportableProduct()
    {
        return $this->belongsToMany(ExportableProduct::class, 'company_exportable_product', 'company_id', 'exportable_product_id');
    }

    // Relationship with FactoryCertification
    public function factoryCertification()
    {
        return $this->belongsToMany(FactoryCertification::class, 'company_factory_certification', 'company_id', 'factory_certification_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admins_id');
    }


    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
