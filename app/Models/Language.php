<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = "languages";
    protected $fillable = [
        'name','abbr','active','direction'
    ];

    public function scopeSelection($q){
        return $q->select('id','name','abbr','active','direction');
    }


}
