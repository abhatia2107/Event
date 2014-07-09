<?php
class Users extends Eloquent
{
	protected $table="users";
	protected $primaryKey = 'users_id';
	protected $fillable = ['firstname','lastname','email','address','facebook','twitter','profile_pic','company_name','city','mobile_no','password','designation'];

	public static $rules=[
		'email'=>'required',
		'firstname'=>'required',
		'lastname'=>'required',
		'mobile_no'=>'required',
	];
	public static $rules_signup=[
		'firstname'=>'required',
		'lastname'=>'required',
		'city'=>'required',
		'mobile_no'=>'required|numeric',
		'password'=>'required|confirmed|alpha_num|min:5',
	];


}