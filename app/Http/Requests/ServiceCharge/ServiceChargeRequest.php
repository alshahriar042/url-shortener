<?php

namespace App\Http\Requests\ServiceCharge;

use Illuminate\Foundation\Http\FormRequest;

class ServiceChargeRequest extends FormRequest
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
        ];
    }
}
