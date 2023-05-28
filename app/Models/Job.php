<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'jobtitle',
        'jobDescription',
        'location',
        'publiceradDatum',
        'slutDatum',

    ];
    use HasFactory;
}
