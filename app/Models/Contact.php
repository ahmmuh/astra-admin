<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [	'telefon',	'email',	'adress',	'postNummer',	'ort'];
    use HasFactory;
}
