<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'Title'             => 'required|max:50',
            'ShortDescription'  => 'required|max:255',
            'Description'       => 'required|max:700',
            'image.*'           => 'required|image|mimes:jpeg,png,jpg'
        ];
    }
}