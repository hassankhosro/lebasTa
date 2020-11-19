<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdvertisement extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(\auth::user()->status == 1){
          return true;
        }
        else{
          return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'group_id' => 'required|max:100000000000|regex:/^[0-9]+$/u',
            'cat_id' => 'required|max:100000000000|regex:/^[0-9]+$/u',
            'type' => 'required|in:unused,secondhand',
            'sell_way' => 'required|in:own,meson',
            'meson_id' => 'nullable|max:100000000000|regex:/^[0-9]+$/u',
            'name' => 'required|max:100|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'price' => ['required','regex:/^([0-9]+$)|^([۰-۹]+$)/','max:99999999999999','min:1'],
            'made_in' => 'required|max:100|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'market_price' => ['required','regex:/^([0-9]+$)|^([۰-۹]+$)/','max:99999999999999','min:1'],
            'brand' => 'nullable|max:100|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'material' => 'nullable|max:50|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            // 'buy_at' => 'required|unique:posts|max:255',
            'usage' => 'nullable|max:50|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'description' => 'required|min:10|max:1000',
        ];
    }
}
