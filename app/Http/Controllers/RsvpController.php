<?php namespace App\Http\Controllers;

use App\Rsvp;
use App\Http\Requests;
use App\Http\Requests\CreateRsvpRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;


class RsvpController extends Controller {

	public function home()
	{
		return view('pages.home');
		
	}

	// public function store(CreateAddressRequest $request)
	public function store(CreateRsvpRequest $request)
	{
		//method won't fire until validation is complete
		Rsvp::create($request->all() );
		return redirect('thankyou');  //return named route from controller
	}

	public function thankyou()
	{	
		return view('pages.thankyou');
	}
	
	public function hotel()
	{
		return redirect()->away('https://www.starwoodmeeting.com/Book/GradertMcKellarWedding');
	}

}