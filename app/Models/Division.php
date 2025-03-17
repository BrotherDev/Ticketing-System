<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Division extends Model
{
    protected $guard = 'admin';

    use HasFactory;

    protected $table = 'divisions';

    protected $fillable = [
        'division_name',
    ];

    public function districts()
    {
        return $this->hasMany(District::class);
    }


}
