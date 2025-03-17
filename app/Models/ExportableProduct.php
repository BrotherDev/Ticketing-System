<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ExportableProduct extends Model
{

    protected $guard = 'admin';


    use HasFactory;

    protected $table = 'exportable_products';

    protected $fillable = [
        'exportable_product_name',
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_exportable_product', 'exportable_product_id', 'company_id');
    }
}
