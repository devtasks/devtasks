@extends('layout')
@section('styles')
	<link rel="stylesheet" type="text/css" href="/css/home.css"/>
@stop

@section('content')
 <!-- intro -->
<section id="intro">			 
	  <div class="container">
			<div id="hero-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">		  
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active html-slide">          	
			      <div class="carousel-caption">			      	
							<h2>We bring ideas to life</h2>		 
			      </div>
			    </div>
			    <div class="item html-slide">       
			      <div class="carousel-caption">
							<h2>We are developers</h2>		    
			      </div>
			    </div>
			    <div class="item html-slide">       
			      <div class="carousel-caption">
							<h2>We are creators</h2>		    
			      </div>
			    </div>
			    <div class="item html-slide">       
			      <div class="carousel-caption">
							<h2>We are ELITE</h2>		    
			      </div>
			    </div>
			  </div>		    
		  </div>
		</div>		
	<!-- scroll-down button -->	
	<div class="fadeInUp delay animated hidden-phone" id="more">
		<button class="btn btn-primary btn-lrg btn-caret"><i class="fa fa-caret-down fa-lg"></i></button>
	</div>
</section> <!-- /intro -->

<!-- services -->

<div id="services-top" class="row">
	<div class="container">
		<div class="col-md-12 center">
			<div class="section-header">
				<h2 class="header">What We Do</h2>
				<p class="header">We build cool web and mobile applications.</p>	
			</div>		
		</div>
	</div>
</div>

<section id="services">
	<div class="container">
		<div class="row divide">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4 center">
						<i class="fa fa-desktop fa-lg"></i>
						<h2>Web</h2>
						<span class="subheader">HTML5, CSS3, JavaScript, PHP &amp; more.</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, quod, in, quis, sequi quisquam neque provident maxime quos libero modi cum ex temporibus eligendi quo dicta sunt quam. Doloribus, obcaecati!</p>
					</div>
					<div class="col-md-4 center">
						<i class="fa fa-mobile fa-lg"></i>						
						<h2>Mobile</h2>
						<span class="subheader">Native iOS &amp; Android development</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, quod, in, quis, sequi quisquam neque provident maxime quos libero modi cum ex temporibus eligendi quo dicta sunt quam. Doloribus, obcaecati!</p>
					</div>
					<div class="col-md-4 center">
						<i class="fa fa-wordpress fa-lg"></i>
						<h2>WordPress</h2>
						<span class="subheader">Custom Themes &amp; Plugins</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, quod, in, quis, sequi quisquam neque provident maxime quos libero modi cum ex temporibus eligendi quo dicta sunt quam. Doloribus, obcaecati!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /services -->

<section class="hint">
	<a href="http://fortawesome.github.com/Font-Awesome/" target="_blank"><strong>HEADS UP!</strong> Click here to check all <strong>249 icons</strong> that we integrated in this template</a>
</section>

<!-- featured work -->
<section id="featured-work-top">
	<div class="section-header">
			<h2 class="header">Projects</h2>
			<p class="header">We build cool web and mobile applications.</p>	
		</div>		
</section>
<section id="featured-work">
	<div class="container">
		<div class="row divide">
			<div class="col-sm-4">
				<figure>							
					<img src="http://placehold.it/400x400" alt="">
					<figcaption>
						<h3>Project 1</h3>
						<p class="green">Laravel HTML5 &amp; CSS3</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-sm-4">
				<figure>							
					<img src="http://placehold.it/400x400" alt="">
					<figcaption>
						<h3>Project 2</h3>
						<p class="green">Laravel HTML5 &amp; CSS3</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-sm-4">
				<figure>							
					<img src="http://placehold.it/400x400" alt="">
					<figcaption>
						<h3>Project 3</h3>
						<p class="green">Laravel HTML5 &amp; CSS3</p>
					</figcaption>
				</figure>
			</div>
		</div>
		<div class="row divide">
			<div class="col-sm-4">
				<figure>							
					<img src="http://placehold.it/400x400" alt="">
					<figcaption>
						<h3>Project 1</h3>
						<p class="green">Laravel HTML5 &amp; CSS3</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-sm-4">
				<figure>							
					<img src="http://placehold.it/400x400" alt="">
					<figcaption>
						<h3>Project 2</h3>
						<p class="green">Laravel HTML5 &amp; CSS3</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-sm-4">
				<figure>							
					<img src="http://placehold.it/400x400" alt="">
					<figcaption>
						<h3>Project 3</h3>
						<p class="green">Laravel HTML5 &amp; CSS3</p>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
</section>
<!-- /featured work -->
<!-- featured work -->
<section id="process-top">
	<div class="section-header">
			<h2 class="header">The Process</h2>
			<p class="header">We don't just build applications, we are all about clean dry code, design patterns and delivering quality applications, with an agile approach. See how we build every application, using a proven process, that insures quality everytime.</p>	
		</div>		
</section>
<section id="process">
	<div class="container">
		<div class="row divide">
			<div class="col-md-4 center">
				<i class="fa fa-tasks fa-lg"></i>
				<h2>Requirements</h2>
				<p>We work with each and every client to find out exactly what they need. We ask the right questions to learn about the goals of your project. We work through each specific requirement of your project.</p>
			</div>
			<div class="col-md-4 center">
				<i class="fa fa-picture-o fa-lg"></i>
				<h2>Mockups</h2>
				<p>We develop screen mockups to give each client a visual representation of their application. This helps work out the user experience and flow of the application, without commiting to a final design.</p>
			</div>
			<div class="col-md-4 center">
				<i class="fa fa-list-alt fa-lg"></i>
				<h2>Story Specification</h2>
				<p>Once we have gathered the requirements for your project and have finalized the mockups, we will draft a formal story specification, which walks you through the application from each prespective.</p>
			</div>
		</div>
		<div class="row divide">
			<div class="col-md-4 center">
				<i class="fa fa-code fa-lg"></i>
				<h2>Development</h2>
				<p>Once the story specification has been approved, we move into development. We believe in continious customer feedback, so we move at a rapid pace, with this agile approach we can stay on track and change on demand.</p>
			</div>
			<div class="col-md-4 center">
				<i class="fa fa-bug fa-lg"></i>
				<h2>Testing</h2>
				<p>All of our code is clean and fully object-oreiented. We provide unit, integration and UI tests with every project. This isures the quality of the code is of the best and allows for changes without risk of breaking the existing application.</p>
			</div>
			<div class="col-md-4 center">
				<i class="fa fa-rocket fa-lg"></i>
				<h2>Deployment</h2>
				<p>Once your project has completed the testing phase and been approved by us and you, we deploy your new application to it's own cloud-based server. We start you on a basic package, with the ability to scale as needed.</p>
			</div>
		</div>
	</div>
</section>
@stop
@section('scripts')
    <script src="/js/home.js"></script>
@stop