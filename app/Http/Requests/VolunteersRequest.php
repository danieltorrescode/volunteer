<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteersRequest extends FormRequest
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
				'firstName' => 'min:3|required',
				'lastName' => 'min:3|required',
				'email' => 'email|required'
				// 'password' => 'confirmed|required'
					//
			];
    }
		public function messages()
		{
				return [
					'firstName.min' => 'The name is not valid',
					'lastName.min' => 'The name is not valid',
					'email.email' => 'E-mail is not valid'
					// 'password.confirmed' => 'Password must be confirmed'
						//
				];
		}
}
