<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'address_type',
        'division_id',
        'district_id',
        'thana_id',
        'address_details',
    ];
}
