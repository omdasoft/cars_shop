<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    protected $table = "makers";

    protected $fillable = [
        'translation_lang','translation_of','name','slug','active','logo','created_at','updated_at'
    ];

    public function scopeSelection($query){
        return $query->select('id','name','slug','translation_lang','translation_of','logo','active');
    }

    public function getLogoAttribute($value){
        return $value != null ? asset('assets/'.$value):"";
    }

    public function getActive(){
        return $this->active == 1 ? 'مفعل':'غير مفعل';
    }

    //make self relation with default category and other translation languages
    public function translations(){
        return $this->hasMany(self::class,'translation_of');
    }


}


