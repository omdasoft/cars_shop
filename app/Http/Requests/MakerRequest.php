<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'logo' => 'required_without:id|mimes:jpg,jpeg,png',
            'maker' => 'required|min:1',
            'maker.0.name' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'logo.required_without' => 'هذا الحقل مطلوب',
            'maker.required' => 'يجب علي الاقل ادخال لغة واحدة',
            'maker.0.name.required' => 'هذا الحقل مطلوب',
        ];
    }
}
