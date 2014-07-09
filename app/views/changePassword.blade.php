@extends('layout.layoutdef')
@section("home")
	
	<div class="col-md-3  col-xs-8 col-sm-5  vertical-button-container">
		<center>
			<div class="btn-group-vertical">
					<button type="button" class="btn btn-default">Personal Details</button>
					<button type="button" class="btn btn-default">Company Details</button>
					<button type="button" class="btn btn-default">Change Password</button>
			</div>
		</center>
	</div>
	<div class="col-md-4 col-xs-8 col-sm-5 form-container">
		<form role="form" method="post" action="@if(isset($eventdetails)){{"/addeditevent/$eventdetails->event_id"}}@else{{"/add_details"}}@endif" enctype="multipart/form-data">
		<div class="input-group col-md-12 col-sm-12 col-xs-12">
	      <label>Old Password</label>
	      <input type="text" class="form-control" placeholder="Old Password" name="old_password">
	    </div>
	    <br/>
	    <div class="input-group col-md-12 col-sm-12 col-xs-12">
	      <label>New Password</label>
	      <input type="text" class="form-control" placeholder="New Password" name="new_password">
	    </div>
	    <br/>
	    <div class="input-group col-md-12 col-sm-12 col-xs-12">
	      <label>Confirm Password</label>
	      <input type="text" class="form-control" placeholder="Confirm Password" name="confirm_password">
	    </div>
	    <br/>
	    <center><button type="submit" class="btn btn-default" name="submit">Change Password</button></center>
	</div>
	<div class="col-md-4 col-xs-4 col-sm-0 dummy-container">
@endsection