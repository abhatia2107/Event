@extends('layout.layoutdef')
@section("formpage")
@if($errors->has())
  @foreach($errors->all() as $error)
    <p>{{ $error }}<br>
  @endforeach
@endif
@if(Session::has('message'))
    <p>{{Session::get('message')}}
  @endif
  	<div class="col-md-3  col-xs-8 col-sm-6 vertical-button-container">
		<div class="btn-group-vertical">
				<button type="button" class="btn btn-default">Personal Details</button>
				<button type="button" class="btn btn-default">Company Details</button>
				<button type="button" class="btn btn-default">Change Password</button>
		</div>
	</div>
<div class="col-md-8 col-sm-8 col-xs-8">
  <h1>Add Company Details:</h1>
  <form role="form" method="post" enctype="multipart/form-data">
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Company Name</label>
      <input type="text" class="form-control" id="email" placeholder="Company Name" name="email">
    </div>
    <br/> 
     <div class="input-group col-md-12 col-sm-3 col-xs-3">
      <label>Company Address</label>
      <div></div>
    </div>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <textarea name="address" class="form-control" placeholder="Your address"  rows="5"></textarea>
    </div>
    <br/>
     <div class="input-group col-md-12 col-sm-3 col-xs-3">
      <label>Company Description</label>
      <div></div>
    </div>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <textarea name="description" class="form-control" placeholder="Tell us more about your company."  rows="5"></textarea>
    </div>
    <br/>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>City</label>
      <input id="text" type="text" class="form-control" id="city" placeholder="Eg. Kathmandu" name="location">

    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Postal Code</label>
      <input type="text" class="form-control" id="postal_code" name="Postal Code" placeholder="Eg. 44600" >
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Phone No.</label>
      <input type="text" class="form-control"  name="phone_no" placeholder="Your Phone No.">
    </div>
    <br/>
     <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>FAX No.</label>
      <input type="text" class="form-control"  name="fax_no" placeholder="Your FAX No.">
    </div>
    <br/>
    <div class=" input-group col-md-12 col-sm-12 col-xs-12">
      <label>Company Email</label>
      <input type="text" class="form-control"  name="company_email" placeholder="Eg. example@company.com">
    </div>
     <br/>
    <div class=" input-group col-md-12 col-sm-12 col-xs-12">
      <label>Company URL</label>
      <input type="text" class="form-control"  name="company_url" placeholder="Eg. company.com">
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Company Logo</label>
      <div>
        <input type="file" id="company_logo" name="Choose File">
      </div>
    </div>
    <br/>
    <input type="Submit">
@endsection