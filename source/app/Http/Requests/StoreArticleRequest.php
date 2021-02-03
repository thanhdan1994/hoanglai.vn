<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'article_type_id' => 'required|integer',
            'description' => 'required|max:500',
            'content' => 'required',
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
            'name.required' => 'Tên bài viết là bắt buộc',
            'article_type_id.required' => 'Vui lòng chọn loại bài viết',
            'article_type_id.integer' => 'Sai định dạng loại bài viết',
            'description.required' => 'Mô tả bài viết là bắt buộc',
            'content.required' => 'Nội dung bài viết là bắt buộc',
            'featured_image.image' => 'Ảnh sản phẩm sai định dạng (jpg, jpeg, png, bmp, gif, svg, or webp)',
        ];
    }
}
