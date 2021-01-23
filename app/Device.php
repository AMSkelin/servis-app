<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'name' 
    ];

    public function device_model() {
        return $this->belongsTo(Device_model::class);
    }

    public function repair() { 
        return $this->hasMany(Repair::class); }

    public function user() {
        return $this->belongsTo(User::class);
        }

}
