<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $fillable = [
        'name',
        'note'
         
    ];

    public function device() {
        return $this->belongsTo(Device::class);
    }

    public function bill() {
        return $this->belongsTo(Bill::class);
    }

    public function part() {
        return $this->belongsTo(Part::class);
    }
        
}
