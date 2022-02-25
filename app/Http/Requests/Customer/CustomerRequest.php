<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'phone' => 'required|unique:customers|min:11|max:13',
            'email' => 'unique:customers|max:50',
            'address' => 'nullable|string|max:300',
            'is_company' => 'nullable',
            'company_contact' => 'nullable|string',
        ];
    }
}
