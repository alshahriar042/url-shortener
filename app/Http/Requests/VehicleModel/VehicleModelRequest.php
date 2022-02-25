<?php

namespace App\Http\Requests\VehicleModel;

use Illuminate\Foundation\Http\FormRequest;

class VehicleModelRequest extends FormRequest
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
