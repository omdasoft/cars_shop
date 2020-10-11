<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carModel extends Model
{
    protected $table = "models";

    protected $fillable = [
        'translation_lang','translation_of','name','slug','make_id','created_at','updated_at'
    ];

    public function scopeSelection($query){
        return $query->select('id','name','slug','translation_lang','translation_of','make_id');
    }


}
