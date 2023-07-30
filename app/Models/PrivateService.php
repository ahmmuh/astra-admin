<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivateService extends Model
{
      protected $casts = [
        'extra' => 'json'
    ];
     protected $fillable = [
           'title',
           'title2',
            'menyNamn',
            'description',
            'descriptionImage',
            'serviceType',
            'extra',
            'serviceImage',
    ];
    protected $table='private_services';
    use HasFactory;
}
