<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEmployee extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'first_name' => 'required|string|min:1|max:255',
            'last_name' => 'required|string|min:1|max:255',
            'company_id' => 'required|exists:companies,id',
            'company_id.exists' => 'Company does not exist',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|min:1|max:255',
        ];
    }
}
