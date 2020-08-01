<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'user'=> 'required',
            'password'=>'required',
            'validation' => 'required',
        ];
    }
    /**
    * 获取被定义验证规则的错误消息
    *
    * @return array
    * @translator laravelacademy.org
    */
    public function messages(){
        return [
            'user.required' => '不能为空',
            'password.required'  => '不能为空',
            'validation.required'=>'不能为空',
        ];
    }
}
