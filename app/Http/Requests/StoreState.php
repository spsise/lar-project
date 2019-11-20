<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\State;

class StoreState extends FormRequest
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
            'name' => 'required|min:2|max:40',
            'countries_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo obrigatorio',
            'name.min' => 'Campo precisa ter no minimo 2 caracteres',
            //'country_id' => 'required|integer'
        ];
    }
}
