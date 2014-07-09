@extends('layout.layoutdef')
@if($errors->has())
  @foreach($errors->all() as $error)
    <p>{{ $error }}<br>
  @endforeach
@endif
@if(Session::has('message'))
    <p>{{Session::get('message')}}
  @endif
<div class="container col-md-12 col-sm-12 col-xs-12">
	<br/><br/><br/><br/><br/><br/>
	<div class="col-md-3  col-xs-8 col-sm-5 ">
			<div class="btn-group-vertical">
					<button type="button" class="btn btn-default">Current Events</button>
					<button type="button" class="btn btn-default">Past Events</button>
			</div>
	</div>
	<div class="panel panel-default event_table col-md-8 col-sm-8 col-xs-8">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Current Event</div>

	  <!-- Table -->
	  <table class="table">
	  	<tr>
			<th>Event Id</th>
			<th>Event Title</th>
			<th>City</th>
			<th>Actions</th>
		</tr>
		<tr>
			<td>12213</td>
			<td>Check</td>
			<td>Kathmandu</td>
			<td><a href="editevent">Check</td>
		</tr>
	  </table>
	</div>
</div>