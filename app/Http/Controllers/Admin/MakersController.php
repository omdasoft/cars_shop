<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakerRequest;
use App\Models\Maker;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;

class MakersController extends Controller
{
    public function index(){
        $default_lang = get_default_language();
        $makers = Maker::where('translation_lang',$default_lang)->selection()->get();
        return view('admin.makers.index',compact('makers'));
    }

    //create
    public function create(){
        return view('admin.makers.create');
    }

    //store

    public function store(MakerRequest $request){
        try {
            $makers = collect($request->maker);
            $filter = $makers->filter(function($val,$key){
                return $val['abbr'] == get_default_language();
            });

            $file_path = "";
            if ($request->has('logo')) {
                $file_path = uploadImage('makers', $request->logo);
            }
            $default_maker = array_values($filter->all())[0];

            DB::beginTransaction();

          $default_maker_id = Maker::insertGetId([
                'translation_lang' => $default_maker['abbr'],
                'translation_of'  => 0,
                'name'            => $default_maker['name'],
                'slug'            => $default_maker['name'],
                'logo'            => $file_path,
            ]);
          //get other make translations
          $translations = $makers->filter(function($val,$key){
              return $val['abbr'] != get_default_language();
          });
          //check if translations exists
          if(isset($translations) && $translations -> count() > 0){
              $trans_arr = [];
              foreach($translations as $trans){
                  $trans_arr[] =[
                      'translation_lang' => $trans['abbr'],
                      'translation_of'  => $default_maker_id,
                      'name'            => $trans['name'],
                      'slug'            => $trans['name'],
                      'logo'            => $file_path,
                  ];
              }
          }

          //save translations
            Maker::insert($trans_arr);
            DB::commit();
            return redirect()->route('admin.makers')->with(['success' => 'تم اضافة الشركة بنجاح']);

        }catch (\Exception $ex){
            DB::rollback();
            return redirect()->route('admin.makers')->with(['error' => 'عفوا حدث خطأ ما الرجاء المحاولة لاحقا']);
        }
    }

    //edit
    public function edit($id){
        $maker = Maker::find($id);
        if(!$maker)
            return redirect()->route('admin.makers')->with(['error' => 'عفوا لا توجد بيانات']);
        return view('admin.makers.edit',compact('maker'));
    }

    //update maker
    public function update(MakerRequest $request,$id){
        try{
            $maker = Maker::selection()->find($id);

            if(isset($maker)) {

                DB::beginTransaction();

                //get the maker name in arabic lang
                $makerArabic = array_values($request->maker)[0];

                //active
                if (!$request->has('maker.0.active'))
                    $request->merge(['active' => 0]);
                else
                    $request->merge(['active' => 1]);

                Maker::where('id',$id)->update([
                    'name' => $makerArabic['name'],
                    'slug' => $makerArabic['name'],
                    'active'  => $request->active,
                ]);

                //update logo
                if ($request->has('logo')) {
                    //delete the old logo
                    $logo = Str::after($maker-> logo ,'assets/');
                    $logo = base_path('assets/'.$logo);
                    if(file_exists($logo))
                        unlink($logo);
                    //upload logo
                    $file_path = uploadImage('makers', $request->logo);
                    //update logo in DB
                    Maker::where('id', $id)->update([
                        'logo' => $file_path,
                    ]);
                }



                DB::commit();
                return redirect()->back()->with(['success'=>'تم تحديث البيانات بنجاح']);


            }else{
                return redirect()->route('admin.makers')->with(['error'=>'عفوا الشركة غير موجوده']);
            }


        }catch (\Exception $ex){
            DB::rollback();
            return $ex->getMessage();
            return redirect()->route('admin.makers')->with(['error'=>'عفوا حدث خطأ ما الرجاء المحاولة لاحقا']);
        }
    }

    //delete
    public function destroy(){

    }
}
