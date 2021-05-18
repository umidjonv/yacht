<?php

namespace App\Http\Requests;

use App\Models\Vendor;
use Illuminate\Foundation\Http\FormRequest;

class YachtRequest extends FormRequest
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
            'VendorId' => 'required|numeric',
            'Name' => 'required|max:255',
            'Area' => 'required|max:255',
            'Address' => 'required|max:255|',
            'Capacity' => 'required|numeric',
            'activity.StartTime' => 'required|date_format:H:i',
            'activity.EndTime' => 'required|date_format:H:i',
            'image.*' => 'required|image|mimes:jpeg,png,jpg'


        ];
    }
}
