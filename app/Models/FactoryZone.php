<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactoryZone extends Model
{

    use HasFactory;

    protected $fillable = [
        'factory_zone_name',
    ];
}
