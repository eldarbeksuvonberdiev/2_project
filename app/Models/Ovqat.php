<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ovqat extends Model
{
    /** @use HasFactory<\Database\Factories\OvqatFactory> */
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function masalliqs(){
        return $this->belongsToMany(Masalliq::class,'ovqat_masalliqs','ovqat_id','masalliq_id');
    }
}
