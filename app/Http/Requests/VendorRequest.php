<?php

namespace App\Http\Requests;

use App\Models\Vendor;

use App\Rules\Whitespace;
use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
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

        return  [

            'name' => ['required','unique:users','max:255',new Whitespace()],
            'CompanyName' => 'required|max:255',
            'Contact' => 'required|max:255',
            'Email' => 'required|email|max:255|unique:vendors',
            'Password' => 'required|alphaNum|min:6',
            'Repassword' => 'required|same:Password',
        ];
    }
}
