<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestuarantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=>["required","string","max:30"],
            "address"=>["required","string","max:30"],
            "phone"=>["required","numeric"],
            "vat"=>["required","max:11","string"],
            "description"=>["required","string","max:500","nullable"],
            "image"=>["required","image"],
            "user_id"=>["unique:restaurant,user_id"]
        ];
    }
}