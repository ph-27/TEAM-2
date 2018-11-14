<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => 'required|max:255',
            'unit_price' => 'required',
            'imported_date' => 'required|date_format:"Y-m-d"',
            'expired_date' => 'required|date_format:"Y-m-d"',
            'origin' => 'required|max:50',
            'imp_quantity' => 'required|integer',
            'in_stock' => 'required|integer',
            'slug' => 'required|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'Trường :attribute là bắt buộc',
            'max' => 'Trường :attribute tối đa là :max kí tự',
            'integer' => 'Trường bắt buộc :attribute là kiểu số nguyên',
            'date_format' => 'Trường :attribute format không đúng định dạng :format',
        ];
    }
}
