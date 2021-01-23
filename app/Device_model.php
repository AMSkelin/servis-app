<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device_model extends Model
{
    protected $fillable = [
        'name' ,
        
    ];

    public function device_type() {
        return $this->belongsTo(Device_type::class);
    }

    public function device() { 
        return $this->hasMany(Device::class); }

    
}
