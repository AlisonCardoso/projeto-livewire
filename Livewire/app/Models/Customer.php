<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $filable = [
        'phone_number',
       ' gender',
       'fathers_name',
       'mothers_name',
       'facebook',
       'instagram',

    ];
}
