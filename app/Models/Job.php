<?php

namespace App\Models;
use \App\Models\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'jobTitle',
        'jobDescription',
        'location',
        'publiceradDatum',
        'slutDatum',

    ];
    use HasFactory;
  
    public function application(): HasMany
    {
        return $this->hasMany(Application::class);
    }
}
