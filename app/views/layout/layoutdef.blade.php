<html>
<head>
	<link href="/css/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<link href="/css/home.css" rel="stylesheet">
	<script src="/css/bootstrap/js/jquery.js"></script>
	<script src="/css/bootstrap/js/jquery.min.js"></script>
  	<script src="/css/bootstrap/js/jquery-1.10.2.js"></script>
  	<script src="/css/bootstrap/js/jquery-ui.js"></script>
  	<script src="/css/bootstrap/js/bootstrap.min.js"></script>
  	<script src="/css/bootstrap/js/bootstrap.js"></script>

<title></title>
</head>
<body>

	<header id="top" class="header navbar-fixed-top head col-md-12">
				<div class="check container col-md-12 col-sm-12 col-xs-12">
				<div class="navbar-left col-md-6 col-xs-10 col-sm-10">
					<h1 class="logo pull-left col-md-4 col-sm-4 col-xs-5">
						<a href="#">
	      					<img class="logo-img" src="logo.png" alt="Logo">
	    				</a>
	    			</h1>
	    				<div class="main-form form-group searchForm col-md-8 col-sm-8 col-xs-7 ">
							<input type="text" class=" col-md-10 col-xs-6 col-sm-8 form-control" placeholder="Search">
							    <button type="submit" class="col-md-2 col-xs-6 col-sm-4 btn btn-default searchButton">
						     		<span class="glyphicon glyphicon-search"></span> 							
						     	</button>
						</div>
					</div>
	    			<nav id="main-nav" class="main-nav navbar-right  col-md-6 col-sm-2 col-xs-2" role="navigation">
                		<div class="navbar-header">
                			<button class="button navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
		                        <span class="sr-only">Toggle navigation</span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
                    		</button>
                		</div>
	                	<div class=" navbar-collapse collapse" id="navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="nav-item dropdown">
								    <a class="scrollto dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
								    	<span class="glyphicon glyphicon-home"></span> 
								   		City <span class="caret"></span>
								    </a>
								    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								    	<li role="presentation">
								      		<a role="menuitem" tabindex="-1" href="#">Kathmandu</a>
								      	</li>
								      	<li role="presentation">
								      		<a role="menuitem" tabindex="-1" href="#">Pokhara</a>
								      	</li>
								      	<li role="presentation">
								      		<a role="menuitem" tabindex="-1" href="#">Bharatpur</a>
								      	</li>
								      	<li role="presentation">
								      		<a role="menuitem" tabindex="-1" href="#">Lalitpir</a>
								      	</li>
								      	<li role="presentation">
								      		<a role="menuitem" tabindex="-1" href="#">Butwal</a>
								      	</li>
								      	<li role="presentation">
								      		<a role="menuitem" tabindex="-1" href="#">Biratnagar</a>
								      	</li>
								      	<li role="presentation">
								      		<a role="menuitem" tabindex="-1" href="#">Birganj</a>
								      	</li>
								      	<li role="presentation">
								      		<a role="menuitem" tabindex="-1" href="#">Dhangadhi</a>
								      	</li>
								      	<li role="presentation">
								      		<a role="menuitem" tabindex="-1" href="#">Bhim Datta</a>
								      	</li>
								      	<li role="presentation" class="divider"></li>
									    <li role="presentation">
									    	<a role="menuitem" tabindex="-1" href="#">other</a>
									    </li>
								    </ul>
								</li>
						    
						    
								<li class="nav-item dropdown">
								    <a class="scrollto dropdown-toggle" data-toggle="dropdown">
								   		<span class="glyphicon glyphicon-user"></span> 
								   			Username <span class="caret">
								   		</span>
								    </a>
								    <ul class="dropdown-menu" role="menu">
								      	<li role="presentation">
								      		<a role="menuitem" tabindex="-1" href="#">My Events</a>
								      	</li>
									    <li role="presentation">
									    	<a role="menuitem" tabindex="-1" href="#">My Organiser</a></li>
									    <li role="presentation">
									    	<a role="menuitem" tabindex="-1" href="#">My Contacts</a>
									    </li>
									    <li role="presentation" class="divider"></li>
									    <li role="presentation">
									    	<a role="menuitem" tabindex="-1" href="#">Account</a>
									    </li>
									    <li role="presentation">
									    	<a role="menuitem" tabindex="-1" href="#"><span class="glyphicon glyphicon-off"></span>Log Out</a>
									    </li>
								    </ul>
							 	</li>
							 	<li class="nav-item"><a class="scrollto" href="#">Create Event</a></li>
							 	<li class="nav-item"><a class="scrollto" href="#">Support</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
				<br/><br/>
	
	<div>
		@yield("home")
	</div>
	<div>
		@yield("formpage")
	</div>
	<footer class="navbar bottom" role="contentinfo">
                    <div class="about col-md-4 col-sm-4 col-xs-10">
                    <h2><a href="about.html">About Us</a></h2>
                    </div>
                    <div class="contact col-md-4 col-sm-4 col-xs-10">
                        <h2>Contact Us</h2><br>
                        <p>Mobile No:6575785859</p>
                        <p>Time:9:00 am-7:00 pm</p>
                        <p>Email Id:shefu.ag911@gmail.com</p>
                    </div>
                    <div class="connect col-md-4 col-sm-4 col-xs-10">
                        <h2>Connect With Us</h2><br>
                        <a href="facebook">Facebook</a><br>
                        <a href="twitter">Twitter</a>
                    </div>
    </footer>
</body>

</html>
