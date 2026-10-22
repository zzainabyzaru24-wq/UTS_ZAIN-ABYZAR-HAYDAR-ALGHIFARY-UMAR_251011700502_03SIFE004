<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    protected $table = 'job_vacancies';

    protected $fillable = [
        'title',
        'company',
        'location',
        'salary',
        'type',
        'requirements',
        'posted_date',
        'description',
        'image',
    ];

    protected $casts = [
        'posted_date' => 'date',
    ];
}
