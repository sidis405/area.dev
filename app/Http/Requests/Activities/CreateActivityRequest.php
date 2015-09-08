<?php

namespace App\Http\Requests\Activities;

use App\Http\Requests\Request;

class CreateActivityRequest extends Request
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
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo titolo è obbligatorio',
            'subtitle.required' => 'Il campo sottotitolo è obbligatorio',
            'description.required' => 'Il campo descrizione è obbligatorio',
        ];
    }
}
