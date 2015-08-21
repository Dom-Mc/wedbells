<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateGuestbookRequest extends Request {

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
			'name' => 'required|between:2,50', // 50, min of 5 characters in length
			'message' => 'required'
		];
	}

}