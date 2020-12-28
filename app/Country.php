<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'native_name' 
    ];

    public function users() { 
        return $this->hasMany(User::class); }
}
