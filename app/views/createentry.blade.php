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
<div class="col-md-8 col-sm-8 col-xs-8">
  <h1><br/>Add event Details:</h1>
  <form role="form" method="post" action="@if(isset($eventdetails)){{"/addeditevent/$eventdetails->event_id"}}@else{{"/add_details"}}@endif" enctype="multipart/form-data">
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <Label>Event Title</label>
      <input type="text" class="form-control " placeholder="Event Title" name="event_title" value="@if(isset($eventdetails)){{$eventdetails->event_title}}@endif">
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>City</label>
      <input id="tags" type="text" class="form-control" placeholder="Eg. Kathmandu" name="location" value="@if(isset($eventdetails)){{$eventdetails->location}}@endif">

    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Start Date & Time</label>
      <input type="timestamp" class="form-control" id="datepicker" name="start_date_time" value="@if(isset($eventdetails)){{$eventdetails->date}}@endif">
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>End Date & Time</label>
      <input type="timestamp " class="form-control" id="datepicker" name="end_date_time" value="@if(isset($eventdetails)){{$eventdetails->time}}@endif">
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Event Thumbnail</label>
      <div>
        <input type="file" id="event_thumbnail" name="Choose File">
      </div>
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-3 col-xs-3">
    <label>Event Description</label>
      <div></div>
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <textarea name="description"  class="form-control" rows="15">@if(isset($eventdetails)){{$eventdetails->description}}@endif</textarea>
    </div>

    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Organisation Name</label>
      <input type="text" class="form-control" placeholder="Organisation Name" name="org_name" value="@if(isset($eventdetails)){{$eventdetails->org_name}}@endif">
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Organisation Description</label>
      <input type="text" class="form-control" placeholder="Organisation Description"  name="org_des" value="@if(isset($eventdetails)){{$eventdetails->org_des}}@endif">
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
          <!--<span class="input-group-addon info">-->
            <h3>
              Include links to facebook and website
              <input name="mycheckbox" type="checkbox" value="shown" onClick="showhide(this.form)" checked>
            </h3>
          <!--</span>-->
          <!--<span class="form-control col-lg-6"></span>-->
      </div>
    <br/>
    <div id="fb" class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Facebook Link</label>
      <input type="text" class="form-control"  name="event_facebook" value="@if(isset($eventdetails)){{$eventdetails->event_facebook}}@endif">
    </div>
    <br/>
     <div id="twitter" class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Twitter Link</label>
      <input type="text" class="form-control"  name="event_twitter" value="@if(isset($eventdetails)){{$eventdetails->event_facebook}}@endif">
    </div>
    <br/>
    <div id="website"class=" input-group col-md-12 col-sm-12 col-xs-12">
      <label>Website</label>
      <input type="text" class="form-control"  name="event_website" value="@if(isset($eventdetails)){{$eventdetails->event_website}}@endif">
    </div>
    <br/>
    <h1>Additional Details:</h1>
    <br/>
    <div id="radio" class="input-group col-md-12 col-sm-3 col-xs-3">
      <br/>
      <div class="col-md-6 col-sm-6 col-xs-6">
      <label>Listing Privacy</label>
      <br/>
        <input type="radio" name="privacy" value="Public Page" checked>Public Page
        <br/>
        <input type="radio" name="privacy" value="Private Page">Private Page
      </div>
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Event Venue</label>
      <input type="text" class="form-control " placeholder="Event venue" name="event_venue">
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Event Type</label>
      <!--<input type="text" class="form-control " placeholder="Event type " name="event_type">-->
      
      <select name="type" id="type">
        <option>Select the type of event</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
      </select>
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Event Topic</label>
      <!--<input type="text" class="form-control " placeholder="Event topic" name="event_topic">-->
      <select name="topic" id="topic">
        <option>Select the topic of Event</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
      </select>
    </div>
    <br/>
    <div class="input-group col-md-12 col-sm-12 col-xs-12">
      <label>Event Banner</label>
      <div>
        <input type="file" id="event_banner" name="Choose File">
      </div>
    </div>
    <br/>
    <center><button type="submit" class="btn btn-default" name="submit">Create Event</button></center>
  </form>
  </div>
  <script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>
      tinymce.init({selector:'textarea'});
    $(function() {
        $("#datepicker").datepicker({
          changeMonth: true,
          changeYear: true
        });
    });
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
    function showhide(frm) {
      if (frm.mycheckbox.checked == true) {
        document.getElementById("fb").style.visibility = "visible";
        document.getElementById("website").style.visibility = "visible";
        document.getElementById("twitter").style.visibility = "visible";
        }
      else {
        document.getElementById("fb").style.visibility = "hidden";
        document.getElementById("website").style.visibility = "hidden";
        document.getElementById("twitter").style.visibility = "hidden";
      } 
    }
  </script>
@endsection