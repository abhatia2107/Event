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
  	<div class="col-md-3 col-xs-8 col-sm-6 vertical-button-container">
		<div class="btn-group-vertical">
				<button type="button" class="btn btn-default">Personal Details</button>
				<button type="button" class="btn btn-default">Company Details</button>
				<button type="button" class="btn btn-default">Change Password</button>
		</div>
	</div>
<div class="col-md-8 col-sm-8 col-xs-8">
  <h1>Add Personal Details:</h1>
  <form role="form" method="post" enctype="multipart/form-data">
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Email Id</label>
      <input type="text" class="form-control" id="email" placeholder="example@gmail.com" name="email">
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>First Name</label>
      <input id="text" type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Last Name</label>
      <input type="text" class="form-control" id="last_name" name="Last Name" placeholder="Last Name" >
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-3 col-xs-3">
      <label>Address</label>
      <div></div>
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <textarea name="description" class="form-control" placeholder="Your address"  rows="5"></textarea>
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>City</label>
      <input type="text" class="form-control" id="city" placeholder="Eg.Kathmandu" name="city">
    </div>
    <br/>
    <div id="fb" class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Facebook</label>
      <input type="text" class="form-control"  name="event_facebook" placeholder="Your Facebook Profile" value="@if(isset($eventdetails)){{$eventdetails->event_facebook}}@endif">
    </div>
    <br/>
    <div id="website"class=" input-group col-md-12 col-sm-12 col-xs-12">
      <label>Twitter</label>
      <input type="text" class="form-control"  name="event_twitter" placeholder="Your Twitter Profile" value="@if(isset($eventdetails)){{$eventdetails->event_website}}@endif">
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Profile Picture</label>
      <!--<input type="" class="form-control" name="event_logo">-->
      <div>
        <input type="file" id="event_logo" name="Choose File">
      </div>
    </div>
    <br/>
    <input type="Submit" value="Update">
    <script>
     $(function() {
      var availableTags = [
        "Kathmandu",
        "Pokhara",
        "Bharatpur",
        "Lalitpir",
        "Butwal",
        "Biratnagar",
        "Birganj",
        "Dhangadhi",
        "Bhim Datta"
      ];
      $( "#tags" ).autocomplete({
        source: availableTags
      });
    });
    </script>
@endsection