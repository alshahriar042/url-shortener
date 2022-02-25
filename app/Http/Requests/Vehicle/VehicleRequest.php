<?php

namespace App\Http\Requests\Vehicle;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'customer_id' => 'required',
            'brand_id' => 'required',
            'model_id' => 'required',
            'year' => 'nullable|string',
            'seats' => 'nullable|string',
            'colour' => 'nullable|string',
            'body_style' => 'nullable|string',
            'vehicle_type' => 'nullable|string',
            'fuel_type' => 'nullable|string',
            'cc' => 'nullable|string',
            'country_origin' => 'nullable|string',
            'registration_number' => 'nullable|string|unique:vehicles',
            'chesis_number' => 'nullable|string',
            'engine_number' => 'nullable|string',
            'odo' => 'nullable|string',
        ];
    }
}
