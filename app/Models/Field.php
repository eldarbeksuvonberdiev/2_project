<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = [
        'faculty_id',
        'name'
    ];

    public function faculty(){
        $this->belongsTo(Faculty::class,'faculty_id');
    }

    public function groups(){
        $this->hasMany(Group::class,'field_id');
    }
}
