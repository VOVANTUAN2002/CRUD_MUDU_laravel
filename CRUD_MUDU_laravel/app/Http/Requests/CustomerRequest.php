<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required',
                'group' => 'required',
                'id' => 'required',
                'birthday' => 'required',
                'sex' => 'required',
                'phone' => 'required',
                'CMND' => 'required',
                'email' => 'required',
                'address' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Phải nhập tên nhân viên',
            'name.unique' => 'Tên nhân viên đã có',
            'id.required' => 'Phải có Mã nhân viên',
            'group.required' => 'Phải có mã nhân viên',
            'birthday.required' => 'Phải có ngày sinh',
            'sex.required' => 'Phải có giới tính',
            'phone.required' => 'Phải có điện thoại',
            'CMND.required' => 'Phải có CMND',
            'email.required' => 'Phải có email',
            'address.required' => 'Phải có địa chỉ',
        ];
    }
}
