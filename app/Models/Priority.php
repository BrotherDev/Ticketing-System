<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Priority extends Model
{
    protected $guard = 'admin';


    use HasFactory;

    protected $table = 'priorities';

    protected $fillable = [
        'priority_name',
    ];

    // Define the companies relationship
    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_priority', 'priority_id', 'company_id');
    }


}
