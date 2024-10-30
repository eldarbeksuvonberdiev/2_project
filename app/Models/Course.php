<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name'
    ];

    public function groups(){
        $this->hasMany(Group::class,'course_id');
    }
}
