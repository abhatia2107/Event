<?php

class EventController extends BaseController {

public function add_details()
{
	$event = new Details();
	
	$validator = Validator::make($data=Input::all(),Details::$rules);
	if($validator->fails())
	{
		return Redirect::back()->withErrors($validator);
	}
	else
	{
	$MaxEventId=$event->getmaxeventid();
	$MaxEventId++;
	$file=Input::file('file');
	foreach($file as $utk)
	{
		$filename = $MaxEventId.".jpg";
		$upload_success = $utk->move('public/event_logo/', $filename);
	}
	
	
		if( $upload_success ) {
		} 
		else {
   			return Redirect::to('/form')->with('message','Error in uploading Event logo ,Please try again');
		}
		$data['usertable_id']=1;
		$data['event_logo']=$filename;
		//return $data;
		Details::create($data);
		return Redirect::to('/myevent')->with('message','Event has been successfully added!');
	}
 }

 public function my_event()
 {
 	$event= new Details();

 	$events=$event->getalldetails();
 	return View::make('myevents',compact('events'));
 	
 }
 public function edit_event($id)
 {
 	$event = new Details();
 	$edit_event=$event->getediteventdetails($id);
 	Session::flash('message','Edit your events');
 	return View::make('createentry')->with('eventdetails',$edit_event[0]);

 }
 public function add_edit_event($id)
 {
 	$event = new Details();	
 	$event_data=Details::find($id);
 	$data = Input::all();
 	if(Input::file('file'))
 	{

 		File::delete('public/event_logo/'.$event_data->event_logo);
 		$file=Input::file('file');
 		$filename=$id.".jpg";
		$upload_success = $file->move('public/event_logo/', $filename);
		if( $upload_success ) {
				} 
		else {
				return "file not uploaded";
   				return Redirect::back()->with('message','Error in uploading Event logo ,Please try again');
			}
	}
 	else
 	{
 		
 	}
		$data['event_logo']=$event_data->event_logo;
 		$event_data->update($data);
 		return Redirect::to('/myevent')->with('message','Your event has been edited');
	}
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
}
