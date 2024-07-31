<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:payments,name', // Tên thanh toán là bắt buộc, chuỗi, tối đa 255 ký tự và không được trùng lặp  
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên phương thức thanh toán là bắt buộc.',
            'name.string' => 'Tên phương thức thanh toán phải là một chuỗi.',
            'name.max' => 'Tên phương thức thanh toán không được vượt quá 255 ký tự.',
            'name.unique' => 'Tên phương thức thanh toán này đã tồn tại.',
        ];
    }
}
