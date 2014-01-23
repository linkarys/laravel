<?php

class Post extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function comment() {
		return $this->hasMany('Comment', 'id');
	}
}
