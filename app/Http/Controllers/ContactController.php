<?php namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests;
use App\Http\Requests\CreateContactRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

class ContactController extends Controller {

	public function index()
	{
		return redirect('/');
	}

	public function store(CreateContactRequest $request)
	{
		//method won't fire until validation is complete
		Contact::create($request->all() );
		return redirect('thankyou');  //return named route from controller
	}
}
