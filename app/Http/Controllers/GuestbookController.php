<?php namespace App\Http\Controllers;

use App\Guestbook;
use App\Http\Requests;
use App\Http\Requests\CreateGuestbookRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

class GuestbookController extends Controller {

	public function home()
	{
		return view('pages.home');
	}


	public function store(CreateGuestbookRequest $request)
	{
		Guestbook::create($request->all() );
		return redirect('thankyou');  //return named route from controller
	}

	public function thankyou()
	{
		return view('pages.thankyou');
	}

}
