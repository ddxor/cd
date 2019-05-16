<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCompany extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:1|max:255',
            'email' => 'nullable|email',
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=100,min_height=100',
            'website_url' => 'url',
        ];
    }
}
