<?php namespace App\Http\Controllers;

use App\Guestbook;
use App\Http\Requests;
use App\Http\Requests\CreateGuestbookRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

class GuestbookController extends Controller {

	public function index()
	{
		return redirect('/');
	}

	public function store(CreateGuestbookRequest $request)
	{
		//method won't fire until validation is complete
		Guestbook::create($request->all() );
		return redirect('thankyou');  //return named route from controller
	}

}
