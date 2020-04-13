<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePropertyRequest extends FormRequest
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
            'client_id'=>'required|gte:1',
            'agent_id'=>'required',
            'aktiv'=>'boolean',
            'kiemelt'=>'boolean',
            'list_type'=>'required',
            'type_id'=>'required',
            'price'=>'integer|min:1000|max:1000000000',
            'min_price'=>'integer|min:1000|max:1000000000|lt:price',
            'act_price'=>'',
            'deposit'=>'',
            'header_hun'=>'required',
            'short_text_hun'=>'required',
            'text_hun'=>'required',
            'header_de'=>'required',
            'short_text_de'=>'required',
            'text_de'=>'required',
            'country'=>'required',
            'region'=>'required',
            'city'=>'required',
            'street'=>'required',
            'street_number'=>'required',
            'price'=>'required',
            'min_price'=>'required'
                ];
    }
}
