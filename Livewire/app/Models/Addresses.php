<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;
    protected $filable = [ 'rel',
'street',
'number', 
'complement',
'neightborhood',
'city', 
'state',
'zip_code', ];
}


