<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRentRequest extends FormRequest
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
            'name' => 'required|max:255',
            'vendor_id' => 'required|integer',
            'description' => 'required|max:500',
            'featured_image' => 'image'
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
            'name.required' => 'Tên sản phẩm là bắt buộc',
            'vendor_id.required' => 'Vui lòng chọn hãng sản phẩm',
            'vendor_id.integer' => 'Hãng sản phẩm sai định dạng',
            'description.required' => 'Mô tả sản phẩm là bắt buộc',
            'featured_image.image' => 'Ảnh sản phẩm sai định dạng (jpg, jpeg, png, bmp, gif, svg, or webp)',
        ];
    }
}
