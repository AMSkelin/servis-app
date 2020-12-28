<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name' 
    ];

    public function parts() { 
        return $this->hasMany(Part::class); }
}
