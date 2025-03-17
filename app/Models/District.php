<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    protected $guard = 'admin';

    use HasFactory;

    protected $table = 'districts';

    protected $fillable = [
        'district_name',
        'division_id',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function thanas()
    {
        return $this->hasMany(Thana::class);
    }
}
