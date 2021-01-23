<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device_type extends Model
{
    protected $fillable = [
        'name' 
    ];

   public function device_model() { 
        return $this->hasMany(Device_model::class); }
}
