<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model {

		protected $fillable = [
		'first_name',
		'last_name',
		'guest_first_name',
		'guest_last_name',
		'reservation',
		'comments'
	];

}