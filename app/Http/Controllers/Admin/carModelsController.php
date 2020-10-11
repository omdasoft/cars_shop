<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\carModel;
use Illuminate\Http\Request;

class carModelsController extends Controller
{
    public function index(){
        $default_lang = get_default_language();
        $carModels = carModel::where('translation_lang',$default_lang)->selection()->get();
        return view('admin.carModels.index',compact('$carModels'));
    }
}
