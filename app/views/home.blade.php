@extends('layout.layoutdef')
@section("home")
	
			<nav id="main-navbar" class="main-nav navbar-default col-md-12 col-sm-12 col-xs-12" role="navigation">
				<div class="navbar-header">
		            <button class=" button navbar-toggle" type="button" data-toggle="collapse" data-target="#main-nav">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <br/>
		        <div id="main-nav" class=" navbar-collapse collapse" >
					<ul class="nav navbar-nav">
						<li>
							<a href="#">All Categories</a>
						</li>
						<li>
						<a href="#">Professional</a>
						</li>
						<li>
						<a href="#">Educational</a>
						</li>
						<li>
							<a href="#">Sports</a>
						</li>
						<li>
							<a href="#">Campus</a>
						</li>
						<li>
							<a href="#">Religious</a>
						</li>
					</ul>
				</div>
			</nav>
			<div>
				<br/><br/><br/><br/>
			</div>
			<div class="col-md-8 col-sm-10 col-xs-12">
			<div class="btn-group btn-group-justified ">
				<div class="btn-group">
			  		<button type="button" class="btn btn-default">All</button>
			  	</div>
			  	<div class="btn-group">
			    	<button type="button" class="btn btn-default">Today</button>
				</div>
			  	<div class="btn-group">
			    	<button type="button" class="btn btn-default">Tomorrow</button>
			  	</div>
			  	<div class="btn-group">
			  		<button type="button" class="btn btn-default">This Week</button>
			  	</div>
			  	<div class="btn-group">
			    	<button type="button" class="btn btn-default">This Weekend</button>
				</div>
			  	<div class="btn-group">
			    	<button type="button" class="btn btn-default">This Month</button>
			  	</div>
			</div>
			<br/><br/>
			<div class="row">
  				<div class="col-xs-6 col-md-3">
    				<a href="#" class="thumbnail">
    					<img src="/event_logo/5.jpg" alt="Logo">
    				</a>
  				</div>
  				<div class="col-xs-6 col-md-3">
    				<a href="#" class="thumbnail">
    					<img src="/event_logo/5.jpg" alt="Logo">
    				</a>
  				</div>
  				<div class="col-xs-6 col-md-3">
    				<a href="#" class="thumbnail">
    					<img src="/event_logo/5.jpg" alt="Logo">
    				</a>
  				</div>
  				<div class="col-xs-6 col-md-3">
    				<a href="#" class="thumbnail">
    					<img src="/event_logo/5.jpg" alt="Logo">
    				</a>
  				</div>
  				<div class="col-xs-6 col-md-3">
    				<a href="#" class="thumbnail">
    					<img src="/event_logo/5.jpg" alt="Logo">
    				</a>
  				</div>
  				<div class="col-xs-6 col-md-3">
    				<a href="#" class="thumbnail">
    					<img src="/event_logo/5.jpg" alt="Logo">
    				</a>
  				</div>
  				<div class="col-xs-6 col-md-3">
    				<a href="#" class="thumbnail">
    					<img src="/event_logo/5.jpg" alt="Logo">
    				</a>
  				</div>
  				<div class="col-xs-6 col-md-3">
    				<a href="#" class="thumbnail">
    					<img src="/event_logo/5.jpg" alt="Logo">
    				</a>
  				</div>
			</div>
			</div>
@endsection