<?php

class Gruden extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'user' => 'required',
		'addr' => 'required'
	);
}
