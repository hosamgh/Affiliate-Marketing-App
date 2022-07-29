<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegistrationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "name"=>"required",
            "email"=>"required|email|unique:users,email",
            "phone_number"=>"required|unique:user_profiles,phone_number",
            "password"=>['required','min:8',Password::min(8)
            ->letters()
            ->numbers()],
            "image"=>"required|mimes:jpg,jpeg,png,bmp,tiff"

        ];
    }


    public function messages()
    {
        return [
            "name.required"=>"this field is required",
            "email.required"=>"this field is required",
            "phone_number.required"=>"this field is required",
            "password.required"=>"this field is required",
            "image.required"=>"this field is required",
            "email.email"=>"please enter a valid email address",
            "email.unique"=>"email address already in use",
            "phone_number.unique"=>"phone number already in use",
            "image.mimes"=>"uploaded file is not a valid image",
            "password.min"=>"password must be minimum 8 characters",
            "password.regex"=>"password must contains characters and digit",



        ];
    }
}
