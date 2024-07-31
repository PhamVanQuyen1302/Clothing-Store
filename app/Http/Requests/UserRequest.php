<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255', // Tên là bắt buộc, phải là chuỗi, tối đa 255 ký tự  
            'email' => 'required|email|max:255|unique:users,email', // Email là bắt buộc, phải là định dạng email hợp lệ, không được trùng lặp  
            'tel' => 'nullable|string|max:255', // Số điện thoại có thể trống, nếu có thì phải là chuỗi tối đa 255 ký tự  
            'gender' => 'nullable|integer|min:0|max:1', // Giới tính có thể trống, nếu có thì phải là số (0 hoặc 1)  
            'address' => 'nullable|string|max:255', // Địa chỉ có thể trống, nếu có thì phải là chuỗi tối đa 255 ký tự  
            'age' => 'nullable|date', // Ngày sinh có thể trống, nếu có thì phải là một ngày hợp lệ  
            'password' => 'required|string|min:8|confirmed', // Mật khẩu là bắt buộc, tối thiểu 8 ký tự và phải xác nhận  
            'role_id' => 'required|exists:roles,id', // ID chức vụ là bắt buộc và phải tồn tại trong bảng roles  
            'status' => 'required|boolean', // Trạng thái là bắt buộc và phải là kiểu boolean  
        ];  
    }

    public function messages()
    {
        return [  
            'name.required' => 'Tên là bắt buộc.',  
            'name.string' => 'Tên phải là một chuỗi ký tự.',  
            'name.max' => 'Tên không được vượt quá 255 ký tự.',  
    
            'email.required' => 'Email là bắt buộc.',  
            'email.email' => 'Email không hợp lệ.',  
            'email.max' => 'Email không được vượt quá 255 ký tự.',  
            'email.unique' => 'Email này đã được sử dụng.',  
    
            'tel.string' => 'Số điện thoại phải là một chuỗi ký tự.',  
            'tel.max' => 'Số điện thoại không được vượt quá 255 ký tự.',  
    
            'gender.integer' => 'Giới tính phải là số.',  
            'gender.min' => 'Giới tính không hợp lệ.',  
            'gender.max' => 'Giới tính không hợp lệ.',  
    
            'address.string' => 'Địa chỉ phải là một chuỗi ký tự.',  
            'address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',  
    
            'age.date' => 'Ngày sinh phải là một ngày hợp lệ.',  
    
            'password.required' => 'Mật khẩu là bắt buộc.',  
            'password.string' => 'Mật khẩu phải là một chuỗi ký tự.',  
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',  
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',  
    
            'role_id.required' => 'ID chức vụ là bắt buộc.',  
            'role_id.exists' => 'ID chức vụ không tồn tại.',  
    
            'status.required' => 'Trạng thái là bắt buộc.',  
            'status.boolean' => 'Trạng thái phải là true hoặc false.',  
        ];  
    }
}
