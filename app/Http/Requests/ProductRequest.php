<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required|numeric|between:0,99999999.99',
            'quantity' => 'required|numeric',
            'promotional_price' => 'required|numeric|between:0,99999999.99',
            'date' => 'required|date',
            'category_id' => 'required',
            'status' => 'required|in:0,1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm bắt buộc điền',
            'price.required' => 'Giá sản phẩm bắt buộc điền',
            'price.numeric' => 'Giá sản phẩm phải là số',
            'price.between' => 'Giá sản phẩm phải nằm trong khoảng từ 0 đến 99.999.999,99',
            'quantity.required' => 'Số lượng bắt buộc điền',
            'quantity.numeric' => 'Số lượng phải là số',
            'quantity.min' => 'Số lượng không được nhỏ hơn 1',
            'promotional_price.required' => 'Giá khuyến mãi bắt buộc điền',
            'promotional_price.numeric' => 'Giá khuyến mãi phải là số',
            'promotional_price.between' => 'Giá khuyến mãi phải nằm trong khoảng từ 0 đến 99.999.999,99',
            'date.required' => 'Ngày nhập bắt buộc điền',
            'date.date' => 'Nhập lại ngày nhập',
            'category_id.required' => 'Danh mục sản phẩm bắt buộc điền',
            'category_id.in' => 'Danh mục sản phẩm chưa hợp lệ',
            'status.required' => 'Trạng thái bắt buộc điền',
            'status.in' => 'Trạng thái chưa hợp lệ',
        ];
    }
}
