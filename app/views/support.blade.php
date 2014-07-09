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

<div class="col-md-12 col-sm-12 col-xs-12">

	<div class="col-md-3 col-sm-0 col-xs-0"></div>
	<div class="col-md-5 col-sm-7 col-xs-7">
		<br/><h1>Submit a request</h1><br/>
		<div class="form-group">
	    	<label>Email</label>
	        <input type="text" class="form-control"  placeholder="Email" name="email">
		</div>
		<div class="form-group">
	    	<label>Subject</label>
	        <input type="text" class="form-control"  placeholder="Subject of the issue you are facing." name="subject">
		</div>
		<div class="form-group">
	    	<label>Description</label>
	        <textarea rows="5" class="form-control"  placeholder="Tell us more about the issue." name="description"></textarea>
		</div>
		<button type="submit" class="btn btn-default" name="submit">Submit</button>
		<div class="box-content">
				<h6><br/>Submit a request for assistance and we'll notify you as soon as possible.</h6>
		</div>
	</div>
</div>
@endsection