<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // The table associated with this model
    protected $table = 'job_listings';

    // Allow mass assignment for these fields
    protected $fillable = ['title', 'salary'];
}
