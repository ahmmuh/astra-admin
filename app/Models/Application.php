<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Application extends Model
{
    protected $fillable = [
        'firstName','lastName',
         'telefon','email','description',
         'jobType','location','job_id'];
    use HasFactory;
}
