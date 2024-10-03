<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $filable = [
        'city_id',
        'state_id',
        'street',
       'number',
       'complement',
       'neightborhood',
       'zip_code',
    ];
    public function cities(){
        return $this->belongsTo(City::class);
    }
    public function states(){
        return $this->belongsTo(State::class);
        }
        
}
