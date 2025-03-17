<?php

namespace App\Models\Import;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CompanyFactoryType extends Model
{

    protected $guard = 'admin';


    use HasFactory;

    protected $table = 'company_factory_type';

    protected $fillable = [
        'id',
        'company_id',
        'factory_type_id',
    ];
}
