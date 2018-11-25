<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivitiesRequest extends FormRequest
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
          'name' => 'min:5|required'
            //
        ];
    }
    public function messages()
    {
        return [
          'name.min' => 'The name is not valid',
					'name.required' => 'A title is required'
            //
        ];
    }
}
