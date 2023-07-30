<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
      protected $casts = [
        'extra' => 'json'
    ];
    protected $fillable = [
           'title',
           'title2',
           'startsida',
            'menyNamn',
            'description',
            'descriptionImage',
            'serviceType',
            'extra',
            'serviceImage',
    ];
    
    protected $table = 'services';

    use HasFactory;
}
