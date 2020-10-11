<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        //return default language category

        $default_lang = get_default_language(); // get the default language
        $categories = Category::where('translation_lang',$default_lang)-> selection() -> get();
        return view('admin.categories.index',compact('categories'));
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        try {
       $category = collect($request->category);
        $filter = $category->filter(function ($val, $key) {
            return $val['abbr'] == get_default_language();
        });

        $default_category = array_values($filter->all())[0];
       $default_category_id = Category::insertGetId([
           'translation_lang' => $default_category['abbr'],
           'translation_of' => 0,
           'name' => $default_category['name'],
           'slug' => $default_category['name'],
       ]);

       //get other languages category filter
       $category_other_languages = $category->filter(function ($val, $key) {
           return $val['abbr'] != get_default_language();
       });
        //check  if other languages exists
        if (isset($category_other_languages)) {
            $other_lang_array = []; //init an empty array of other languages
            foreach ($category_other_languages as $lang) {
                $other_lang_array[] = [
                    'translation_lang' => $lang['abbr'],
                    'translation_of' => $default_category_id,
                    'name' => $lang['name'],
                    'slug' => $lang['name']
                ];
            }

            Category::insert($other_lang_array);
            return redirect()->route('admin.categories')->with(['success' => 'تم انشاء القسم بنجاح']);
        }
        }catch(\Exception $ex){
            return redirect()->route('admin.categories')->with(['error' => 'يوجد خطأ ما الرجاء المحاولة لاحقاً']);
        }
    }

    //edit categories
    public function edit($id){
        try {
           $category = Category::find($id);

           if(!$category){
               return redirect()->route('admin.categories')->with(['error' => 'عفوا القسم الرئيسي المدخل غير موجودً']);
           }

            return view('admin.categories.edit',compact('category'));

        }catch (\Exception $ex){
            //$ex->getMessage();
            return redirect()->route('admin.categories')->with(['error' => 'يوجد خطأ ما الرجاء المحاولة لاحقاً']);
        }
    }
    //update
    public function update(CategoryRequest $request,$id){
        try {
            //find default category
            $default_category = Category::find($id);
            //check if category exists
            if(!$default_category){
                return redirect()->route('admin.categories')->with(['error' => 'عفوا القسم الرئيسي المدخل غير موجودً']);
            }

            //change category object to array
            $category = array_values($request->category)[0];

            //check the active value
            if (!$request->has('category.0.active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

                Category::where('id',$id)->update([
                    'name' => $category['name'],
                    'active' => $request->active
                ]);

            return redirect()->back()->with(['success' => 'تم تحديث القسم بنجاح']);




        }catch (\Exception $ex){
            return redirect()->route('admin.categories')->with(['error' => 'حدث خطأ ما الرجاء المحاولة لاحقاً']);
        }
    }
    //delete
    public function destroy($id){
        try {
            $category = Category::find($id);
            if(isset($category)) {
                $category->translations()->delete();

                $category->delete();
                return redirect()->route('admin.categories')->with(['success' => 'تم الحذف بنجاح']);
            }else{
                return redirect()->route('admin.categories')->with(['error' => 'عفوا القسم الرئيسي المدخل غير موجودً']);
            }
        }catch (\Exception $ex){
            return redirect()->route('admin.categories')->with(['error' => 'حدث خطأ ما الرجاء المحاولة لاحقاً']);
        }
    }

    //change status
    public function changeStatus($id){
        try{
            $category = Category::find($id);
            if(!$category)
                return redirect()->route('admin.categories')->with(['error' => 'عفوا القسم الرئيسي المدخل غير موجودً']);
            $status = $category->active == 0 ? 1 : 0;
            $category->update(['active' => $status]);
            return redirect()->route('admin.categories')->with(['success' => 'تم تغير الحالة بنجاح']);

        }catch (\Exception $ex){
            return redirect()->route('admin.categories')->with(['error' => 'حدث خطأ ما الرجاء المحاولة لاحقاً']);
        }
    }


}
