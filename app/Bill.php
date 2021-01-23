<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'amount',
        'PDV',
        'total_amount',
        'publisher',
        'biiling_number',
        'billing_address'

    ];

    public function repair() { 
        return $this->hasMany(Repair::class); }
    
}
