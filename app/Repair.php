<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $fillable = [
        'bill_id',
        'name',
        'note' 
    ];

    public function bill() { 
        return $this->belongsTo(Bill::class); }

    
}
