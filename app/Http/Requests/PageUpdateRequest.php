<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return $this->post('lang')
            ? [
                'lang.*.title' => 'required|string|max:255',
                'lang.*.meta_title' => 'required|string|max:255',
                'lang.*.meta_description' => 'required|string|max:255',
                'lang.*.content' => 'required|string',
                ]
            : [
                'slug' => 'required|alpha_dash:ascii|max:255|unique:pages,slug,'.$this->route()->parameter('page')->id,
                'menu_id' => 'nullable|numeric|exists:menus,id',
                'menu_order' => 'nullable|numeric',
                'header_img' => 'nullable|image|max:1024' //mimes:jpg,jpeg,png,webp,svg
            ];
    }
}
