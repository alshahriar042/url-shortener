<?php

namespace App\Http\Requests\Job;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'job_card_no'=> 'nullable',
            'customer_id' => 'required',
            'vehicle_id' => 'required',
            'spare_part_id' => 'nullable',
            'third_partie_id' => 'nullable',
            'service_charge_id' => 'nullable',
            'nature' => 'nullable',
            'description' => 'nullable',
            'customer_signature' => 'nullable',
            'technical_signature' => 'nullable',
            'service_advisor_signature' => 'nullable',
            'approved_signature' => 'nullable',
            'intime' => 'nullable',
            'outtime' => 'nullable',
        ];

    }
}
