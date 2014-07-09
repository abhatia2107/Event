@extends('layout.layoutdef')
@section("formpage")
@if(Session::has('message'))
    <p>{{Session::get('message')}}
  @endif
  <table>
    <tr>
      <th>Event Title</th>
      <th>Location</th>
      <th>Date</th>
      <th>Time</th>
    </tr>
    @foreach($events as $pr)
      <tr>
        <td>{{$pr->event_title}}</td>
        <td>{{$pr->location}}</td>
        <td>{{$pr->date}}</td>
        <td>{{$pr->time}}</td>
        <td>  <a href="/deleteevent/{{$pr->event_id}}">Delete</a></td>
        <td>  <a href="/editevent/{{$pr->event_id}}">Edit</a></td>
        <br>
      </tr>
    @endforeach
  </table>
  <a href="/logout">Logout</a>
  <a href="/dashboard">Add person</a></td>



@endsection