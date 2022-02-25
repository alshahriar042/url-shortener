<?php

namespace App\Http\Requests\ThirdPartys;

use Illuminate\Foundation\Http\FormRequest;

class ThirdPartyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'description' => 'required',
            'amount' => 'required|max:255',
            'third_party_vendor_id'=> 'numeric'
        ];
    }
}
