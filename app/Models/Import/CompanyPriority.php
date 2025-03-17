<?php

namespace App\Models\Import;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CompanyPriority extends Model
{

    protected $guard = 'admin';


    use HasFactory;

    protected $table = 'company_priority';

    protected $fillable = [
        'id',
        'company_id',
        'priority_id',
    ];
}
