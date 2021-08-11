<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModel extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'job_requirement' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
