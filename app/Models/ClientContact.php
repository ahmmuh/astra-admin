<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientContact extends Model
{
        protected $fillable = ['firstName','lastName','email','telefon','description'];

    use HasFactory;
}
