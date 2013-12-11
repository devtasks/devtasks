<!DOCTYPE html>
<html>
    <head>
        <title>DevTasks</title>
        <link rel="icon" type="image/png"  href="favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- css loaded here -->
			{{HTML::style('css/bootstrap.min.css')}}
			{{HTML::style('css/bootstrap.overrides.css')}}

			<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<!-- page styles -->
			@yield('styles')
	    </head>
	    <body>
	    	<!-- navbar -->	
			 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			  <div class="container">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="DevTasks"/></a>
			    </div>
			    <div class="navbar-collapse collapse">
			       <ul class="nav navbar-nav navbar-right">
			       	 	  <li class="active"><a href="#">Home</a></li>
			            <li><a href="#">About</a></li>
			            <li><a href="#">Work</a></li>   
			            <li><a href="#">Process</a></li>            
			            <li><a href="#">Blog</a></li>
			            <li><a class="btn btn-primary" href="#">Free Quote</a></li>           
			          </ul>
			    </div><!--/.navbar-collapse -->
			  </div>
			</div>
			<!--/navbar -->

			@yield('content')	
	   	<section class="hint">
	   		<a href="#"><strong>Have a project in mind? Click here for a FREE Quote.</strong></a>
	   	</section>
	    <!-- footer -->
			<section id="footer">
				<div class="container">
					<div class="row divide">
						<div class="col-md-3">
							<img src="/img/logo.png" alt="DevTasks" class="logo-sm">
							<p class="copyright">&copy; {{date('Y')}} Carl Weis. All Rights Reserved.</p>
						</div>
						<div class="col-md-2 col-md-offset-4">
							<h4 class="right">Menu</h4>
							<ul class="footer-menu">
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Work</a></li>
								<li><a href="#">Process</a></li>
								<li><a href="#">Blog</a></li>								
								</li>
							</ul>
						</div>
						<div class="col-md-2 col-md-offset-1">
							<h4 class="right">Social</h4>
							<ul class="footer-menu">
								<li><a class="facebook" href="#">Facebook</a></li>
								<li><a class="twitter" href="#">Twitter</a></li>
								<li><a class="google" href="#">Google</a></li>								
								<li><a class="linkedin" href="#">LinkedIn</a></li>
								<li><a class="github" href="#">GitHub</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
	    <!-- /footer -->

    	<!--scripts loaded here -->
    	{{HTML::script('js/jquery-2.0.3.min.js')}}        
    	{{HTML::script('js/bootstrap.min.js')}}
    	<!-- page scripts -->
    	@yield('scripts')
    </body>
</html>