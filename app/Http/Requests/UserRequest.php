<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'contact'   => 'string',
            'email' => 'required|email|string',
            'old_password'  => 'string|nullable',
            'password'  => 'confirmed|string|nullable',
            'photo' => 'image|max:10240|nullable',
        ];
    }
}
