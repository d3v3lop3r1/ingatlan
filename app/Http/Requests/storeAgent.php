<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeAgent extends FormRequest
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
            'name'=>'required|max:50',
            'level'=>'required',
            'email'=>'unique:agents|required',
            'tel'=>'required',
            'address'=>'required|max:100',
            'provision'=>'required',
            'languages'=>'required',
            'about_me_hun'=>'required',
            'about_me_de'=>'required'
        ];
    }
}
