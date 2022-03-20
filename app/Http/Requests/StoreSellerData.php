<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Sector;
class StoreSellerData extends FormRequest
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
            'first_name' => 'string|required|min:4',
            'last_name' => 'string|required|min:4',
            'email' => 'email|required|unique:sellers',
            'sector_id' => 'required',
            'phone' => 'numeric|required|min:12',
            'city' => 'string|required|min:3',
            'password' => 'required|confirmed',
            'reg_cert' => 'required|file|mimes:pdf',
            'com_cert' => 'required|file|mimes:pdf',
            'agree_terms' => 'required',          
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'reg_cert.required' => 'Registeration certificate is required.',
    //         'com_cert.required'
    //     ];
    // }

    public function attributes()
    {
        return [
            'reg_cert' => 'Registeration certificate',
            'com_cert' => 'Commercial certificate',
            'sector_id'=>'Sector',
        ];
    }
}
