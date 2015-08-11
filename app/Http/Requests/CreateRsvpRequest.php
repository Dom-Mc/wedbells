<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateRsvpRequest extends Request {

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
			 'first_name' => 'required|between:2,50', // 50, min of 5 characters in length
			 'last_name' => 'required|between:2,50', // 50
			 //'guest_first_name' => 'required|between:2,50',
			 //'guest_last_name' => 'required|between:2,50',
			 //sometimes your rules will be different for create and update requests

		];
	}
}
