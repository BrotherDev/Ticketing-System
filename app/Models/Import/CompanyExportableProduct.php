<?php

namespace App\Models\Import;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CompanyExportableProduct extends Model
{

    protected $guard = 'admin';


    use HasFactory;

    protected $table = 'company_exportable_product';

    protected $fillable = [
        'id',
        'company_id',
        'exportable_product_id',
    ];
}
