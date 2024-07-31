<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStatusRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:order_status,name', // Tên trạng thái là bắt buộc, phải là chuỗi, tối đa 255 ký tự và không được trùng lặp  
            'description' => 'nullable|string|max:500', // Mô tả có thể trống, nếu có thì phải là chuỗi tối đa 500 ký tự  
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên trạng thái là bắt buộc.',
            'name.string' => 'Tên trạng thái phải là một chuỗi ký tự.',
            'name.max' => 'Tên trạng thái không được vượt quá 255 ký tự.',
            'name.unique' => 'Tên trạng thái này đã tồn tại.',

            'description.string' => 'Mô tả phải là một chuỗi ký tự.',
            'description.max' => 'Mô tả không được vượt quá 500 ký tự.',
        ];
    }
}
