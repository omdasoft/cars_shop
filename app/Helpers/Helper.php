<?php

//get languages
use Illuminate\Support\Facades\Config;

function get_languages(){
    return App\Models\Language::selection()->get();
}

//get default language
function get_default_language(){
    return config::get('app.locale');
}

//uplaod image
function uploadImage($folder, $image){
    $image->store('/',$folder);
    $filename = $image->hashName();
    $path = 'images/'.$folder.'/'.$filename;
    return $path;
}

