<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivateService extends Model
{
     protected $fillable = [
           'title',
            'description',
            'serviceType',
            'serviceImage',
    ];
    protected $table='private_services';
    use HasFactory;
}
