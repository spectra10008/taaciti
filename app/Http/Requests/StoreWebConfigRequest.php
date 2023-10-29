<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWebConfigRequest extends FormRequest
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
            'website_title_ar' => 'required|string',
            'website_title_en' => 'required|string',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'keywords' => 'required|string',
            'call_phone' => 'required|digits_between:9,12',
            'whatsapp_phone' => 'nullable|digits_between:9,12',
            'email' => 'nullable|email|max:255',
            'address_ar' => 'required|max:255|string',
            'address_en' => 'required|max:255|string',
            'facebook_url' => 'nullable|max:255|string',
            'twitter_url' => 'nullable|max:255|string',
            'instagram_url' => 'nullable|max:255|string',
            'linkedin_url' => 'nullable|max:255|string',
            'logo' => 'nullable|mimes:jpg,bmp,png|max:2048',
        ];
    }
}
