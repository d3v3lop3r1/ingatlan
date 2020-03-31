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
            'client_id'=>'required',
            'agent_id'=>'required',
            'list_type'=>'required',
            'type_id'=>'required',
            'header_hun'=>'required',
            'text_hun'=>'required',
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
