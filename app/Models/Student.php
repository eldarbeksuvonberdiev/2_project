<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'address_id',
        'group_id',
        'name',
        'phone',
        'image'
    ];

    public function group(){
        $this->belongsTo(Group::class,'group_id');
    }

    public function address(){
        $this->belongsTo(Address::class,'address_id');
    }
}
