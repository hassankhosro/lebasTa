<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerificationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (\Auth::user()->status != 1) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
{

    if(request()->has('verify')){
        return [
            'verification_code' => 'numeric|digits:4|regex:/^[0-9]+$/u',
            'verify' => 'nullable|regex:/^[ا-یa-zA-Z0-9\-۰-۹ ]+$/u',
        ];
    }
    else
    return [];
    }
}
