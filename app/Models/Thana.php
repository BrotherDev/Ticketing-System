<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Thana extends Model
{
    protected $guard = 'admin';

    use HasFactory;

    protected $table = 'thanas';

    protected $fillable = [
        'thana_name',
        'district_id',
    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
