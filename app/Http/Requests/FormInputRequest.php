<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormInputRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|string',
            'age' => 'numeric',
            'date' => 'date',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string'
        ];
    }

    public function messages(){
        return[
            'name.string' => 'Tên không hợp lệ!',
            'name.required' => 'Tên không được để trống!',
            'age.numeric' => 'Tuổi không hợp lệ!',
            'date.date' => 'Định dạng ngày tháng không hợp lệ!',
            'phone.numeric' => 'Số điện thoại không hợp lệ!',
            'web.string' => 'Vui lòng xem lại địa chỉ web!',
            'address.string' => 'Vui lòng xem lại địa chỉ!',
        ];
    }
}
