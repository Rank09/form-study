<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
        ];
    }

    public function messages(){
        return [
            'first_name.required' => '苗字を入力してください',
            'last_name.required' => '名前を入力してください',
            'gender.required' => '性別を入力してください',
        ];
    }   
}
