<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Job;
class Application extends Model
{
    protected $fillable = ['firstName','lastname', 'description','telefon','email'];
    use HasFactory;
   public function job(): BelongsTo
   {
       return $this->belongsTo(job::class);
   }
}
