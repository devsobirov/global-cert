<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|alpha_dash:ascii|max:255|unique:pages,slug',
            'menu_id' => 'nullable|numeric|exists:menus,id',
            'menu_order' => 'nullable|numeric',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'content' => 'required|string',
            'header_img' => 'nullable|image|max:1024' //mimes:jpg,jpeg,png,webp,svg
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            //'slug' => trim($this->slug, "/")
        ]);
    }
}
