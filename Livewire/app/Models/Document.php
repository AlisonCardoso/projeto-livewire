<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $filable =
    [  
         'rel_id',
         'rel_type',
         'document_type_id',
         'number', ];
}
