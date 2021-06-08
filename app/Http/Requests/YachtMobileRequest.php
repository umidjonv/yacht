<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YachtMobileRequest extends FormRequest
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
            'Name' => 'required|string|max:255',
            'Area' => 'required|string',
            'Postcode' => 'required|string|max:255',
            'Capacity' => 'required|numeric|max:1000',
            'Length' => 'required|integer|max:100000',
            'AllDay' => ['string', 'max:3', "regex:/^on$/"],
            'Open' => 'required|array',
            'Open.From' => 'required|array',
            'Open.From.Hours' => 'required|integer',
            'Open.From.Minutes' => 'required|integer',
            'Open.To' => 'required|array',
            'Open.To.Hours' => 'required|integer',
            'Open.To.Minutes' => 'required|integer',
            'Regularity' => 'required|array',
            'Regularity.From' => 'required|integer',
            'Regularity.To' => 'required|integer',
        ];
    }
}
