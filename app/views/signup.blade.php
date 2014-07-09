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
        <br/><br/>
        <div class="col-md-4 col-sm-3 col-xs-0"></div>
        <div class="col-md-4 col-sm-5 col-xs-10">
            <form role="form" method="post" action="/addsignup" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control"  placeholder="First Name" name="firstname" value="{{Input::old('firstname')}}">
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control"  placeholder="Last Name" name="lastname" value="{{Input::old('lastname')}}">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control"  placeholder="Email" name="email" value="{{Input::old('email')}}">
                  </div>
                  <div class="form-group">
                    <label >Company</label>
                    <input type="text" class="form-control" placeholder="Company" name="company" value="{{Input::old('company')}}">
                  </div>
                  <div class="form-group">
                    <label >City</label>
                    <input type="text" class="form-control" placeholder="City" name="city" value="{{Input::old('city')}}">
                  </div>
                  <div class="form-group">
                    <label >Mobile No</label>
                     <input type="text" placeholder="Mobile No" class="form-control" name="mobile_no" value="{{Input::old('mobile_no')}}">
                  </div>
                  <div class="form-group">
                    <label >Password</label>
                     <input type="password" class="form-control" placeholder="password" name="password" >
                  </div>
                  <div class="form-group">
                    <label >Confirm Password</label>
                     <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" >
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="input-group input-group-xs">
                        <span class="input-group-addon">
                          <input type="checkbox" class="form-control" name="terms_conditions" value="shown" checked>    
                        </span>
                        <span class="input-group-addon">
                          I agree to terms and conditions.
                        </span>
                      </div><!-- /input-group -->
                    </div>
                  </div>
                  <br/>
                  <!--
                  <div class="form-group">
                    <h3>I agree to terms and conditions.<span class="input-group-addon"><input type="checkbox" class="form-control" name="terms_conditions" value="shown" checked></span> </h3>
                  </div>
                  -->
                <button type="submit" class="btn btn-default" name="submit">Sign Up</button>
            </form>
        </div>
    </div>
@endsection