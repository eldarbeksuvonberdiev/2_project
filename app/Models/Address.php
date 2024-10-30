<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'name'
    ];

    public function students(){
        $this->hasMany(Student::class,'address_id');
    }
}
