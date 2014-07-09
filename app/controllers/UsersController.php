<?php

class UsersController extends BaseController {

public function update_personal_detail($id)
{
	$personaldetail=Users::find($id);
	return View::make('personaldetail',compact('personaldetail'));
}
public function add_update_personal_detail($id)
{
	$user_data=Users::find($id);
	$data = Input::all();
 	if(Input::file('file'))
 	{

 		File::delete('public/user_profile_pic/'.$user_data->profile_pic);
 		$file=Input::file('file');
 		$filename=$id.".jpg";
 		$data['profile_pic']=$filename;
		$upload_success = $file->move('public/user_profile_pic/', $filename);
		if( $upload_success ) 
			{
			} 
		else{
				return "file not uploaded";
   				return Redirect::back()->with('message','Error in uploading Event logo ,Please try again');
			}
	}
 	else
 	{
 		
 	}
		$user_data->update($data);
 		return Redirect::back()->with('message','You have successfully updated your personal detail');
}

	public function sign_up()
	{
		return View::make('signup');
	}
	public function add_signu_up()
	{
		$validator=Validator::make($data=Input::all(),Users::$rules_signup);
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));
		}
		else
		{
			$data['password']=Hash::make(Input::get('password'));
			Users::create($data);
			return Redirect::back()->with('message','You have been successfully registered');
		}

	}
}