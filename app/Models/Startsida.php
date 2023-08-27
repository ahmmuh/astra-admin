<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startsida extends Model
{
      protected $fillable = [
           'title',
           'title2',
           'bodyText',
           'welcomeImage',
            'description',
            'descriptionImage',
    ];
    
    protected $table = 'homepages';
    use HasFactory;
}
