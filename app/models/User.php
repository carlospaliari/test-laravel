<?php

class User extends Eloquent {
    protected $table = 'users';

	protected $guarded = array();

	public static $rules = array(
		'email' => 'required',
		'password' => 'required'
	);
}
