<?php

namespace App\Http\Requests\VehicleBrand;

use Illuminate\Foundation\Http\FormRequest;

class VehicleBrandRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
}
