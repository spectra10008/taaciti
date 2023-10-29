<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentMethodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'method_ar'=>'required|max:255|string',
            'method_en'=>'required|max:255|string',
            'icon'=>'nullable|mimes:jpg,bmp,png|max:2048',
        ];
    }
}
