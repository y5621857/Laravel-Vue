<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Validator;
use Hash;

class AdminPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guard('admin')->check();
    }

    /**
     * TODO 添加验证规则
     */
    public function addValidator()
    {
        //TODO 验证用户密码
        Validator::extend('check_password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, Auth::guard('admin')->user()->password);
        });
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->addValidator();
        return [
            'original_password' => 'sometimes|required|check_password',
            'password' => 'sometimes|required|confirmed',
            'password_confirmation' => 'sometimes|required',
        ];
    }

    /**
     * TODO 修改中文错误提示
     * @return array
     */
    public function messages()
    {
        return [
            'original_password.required' => '原密码不能为空',
            'original_password.check_password' => '原密码不正确',
            'password.required' => '新密码不能为空',
            'password_confirmation.required' => '确认密码不能为空',
            'password.confirmed' => '两次密码输入不一致',
        ];
    }
}
