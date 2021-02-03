<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'category_id' => 'required|integer',
            'description' => 'required|max:500',
            'featured_image' => 'required|image',
            'price' => 'required',
            'discount' => 'required|integer|max:100|min:0',
//            'images' => 'required',
//            'images.*' => 'image', // jpg, jpeg, png, bmp, gif, svg, or webp
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
            'category_id.required' => 'Vui lòng chọn loại sản phẩm',
            'category_id.integer' => 'Loại sản phẩm sai định dạng',
            'description.required' => 'Mô tả sản phẩm là bắt buộc',
            'featured_image.required' => 'Vui lòng chọn 1 ảnh sản phẩm',
            'featured_image.image' => 'Ảnh sản phẩm sai định dạng (jpg, jpeg, png, bmp, gif, svg, or webp)',
            'price.required' => 'Vui lòng nhập giá sản phẩm',
            'discount.required' => 'Vui lòng nhập khuyến mãi là 0 (nếu sản phẩm không có khuyến mãi)',
            'discount.integer' => 'Khuyến mãi phải là số từ 0 -> 100',
            'discount.max' => 'Vui lòng không nhập khuyến mãi lớn hơn 100',
            'discount.min' => 'Vui lòng không nhập khuyến mãi bé hơn 0'
//            'images.required' => 'Vui lòng tải lên ít nhất 1 ảnh',
//            'images.*.image' => 'Sai định dạng ảnh (jpg, jpeg, png, bmp, gif, svg, or webp)'
        ];
    }
}
