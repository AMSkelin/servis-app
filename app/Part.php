<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = [
        'name',
        'supplier_id' 
    ];

    public function supplier() { 
        return $this->belongsTo(Supplier::class); }

    public function repair() { 
        return $this->hasMany(Repair::class); }
}
