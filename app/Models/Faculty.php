<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'university_id',
        'name'
    ];

    public function university(){
        $this->belongsTo(University::class,'university_id');
    }

    public function fields(){
        $this->hasMany(Field::class,'faculty_id');
    }
}
