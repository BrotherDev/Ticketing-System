<?php

namespace App\Models\Import;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CompanyFactoryCertification extends Model
{

    protected $guard = 'admin';


    use HasFactory;

    protected $table = 'company_factory_certification';

    protected $fillable = [
        'id',
        'company_id',
        'factory_certification_id',
    ];
}
