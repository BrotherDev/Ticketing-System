<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FactoryType extends Model
{
    protected $guard = 'admin';

    use HasFactory;

    protected $table = 'factory_types';

    protected $fillable = [
        'factory_type_name',
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_factory_type', 'factory_type_id', 'company_id');
    }
}
