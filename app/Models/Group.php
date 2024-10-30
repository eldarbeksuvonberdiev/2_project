<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'field_id',
        'course_id',
        'name'
    ];

    public function field(){
        $this->belongsTo(Field::class,'field_id');
    }

    public function course(){
        $this->belongsTo(Course::class,'course_id');
    }

    public function students(){
        $this->hasMany(Student::class,'group_id');
    }
}
