<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Christ Our Lord</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @include('before_layouts.styling')
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span class="flaticon-bible"></span>Sharing Gods' Gospel</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
			  <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
			  {{--
			  <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#sermons-section" class="nav-link"><span>Sermons</span></a></li>
	          <li class="nav-item"><a href="#events-section" class="nav-link"><span>Events</span></a></li>
	          <li class="nav-item"><a href="#causes-section" class="nav-link"><span>Causes</span></a></li>
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li>
	          <li class="nav-item"><a href="#pastor-section" class="nav-link"><span>Pastor</span></a></li>
			  <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
			  --}}
			  <li class="nav-item"><a href="/login-section" class="nav-link"><span>Login</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background-image:url(frontpages/images/bg_1.jpg);">
      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 text-center ftco-animate mt-5">
	          	<div class="text">
	          		<div class="subheading">
	          			<span>Christian Church</span>
	          		</div>
		            <h1 class="mb-4">Following <span>Jesus</span> wherever we are</h1>
		            <p>For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life.</p>
										<span>John 3:16</span></p>
		            <p><a href="" class="btn btn-primary py-2 px-4">John 3:16</a> {{--<a href="#" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a>--}}</p>
	            </div>
	          </div>
	        </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(frontpages/images/bg_2.jpg);">
      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 text-center ftco-animate mt-5">
	          	<div class="text">
	          		<div class="subheading">
	          			<span>Christian Church</span>
	          		</div>
		            <h1 class="mb-4">We <span>Love</span> God, We Believe in God</h1>
		            <p>The LORD [is] my strength and my shield; my heart trusted in him, and I am helped: therefore my heart greatly rejoiceth; and with my song will I praise him.</p>
		            <p><a href="#" class="btn btn-primary py-2 px-4">Psalms 28:7</a> {{--<a href="#" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a>--}}</p>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
    </section>
	{{--
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section" id="about-section">
    	@include('before_layouts.about')
    </section>
	
    <section class="ftco-counter" id="section-counter">
    	@include('before_layouts.counter')
    </section>
		
		<section class="ftco-section ftco-services-2" id="services-section">
			@include('before_layouts.services')
		</section>

		<section class="ftco-section bg-light" id="sermons-section">
			@include('before_layouts.sermon')
		</section>

		<section class="ftco-intro img" id="events-section" style="background-image: url(frontpages/images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
				</div>
			</div>
		</section>

		<section class="ftco-section bg-light ftco-event" id="events-section">
			@include('before_layouts.events')
		</section>
		

		<section class="ftco-section ftco-causes ftco-no-pb" id="causes-section">
			@include('before_layouts.causes')
		</section>


		<section class="ftco-daily-verse img" style="background-image: url(frontpages/images/bg_4.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row justify-content-center align-items-center">
		    			<div class="col-md-2 ftco-animate">
		    				<div class="icon">
		    					<span class="flaticon-church"></span>
		    				</div>
		    			</div>
		    			<div class="col-md-10 daily-verse pl-md-5 ftco-animate">
		    				<span class="subheading">Jesus Christ Said:</span>
		    				<h3>"16 For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life."</h3>
		    				<h4 class="h5 mt-4 font-weight-bold"><span>Bible:</span> John 3:16 KJV</h4>
		    			</div>
		    		</div>
		    	</div>
	    	</div>
    	</div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
      @include('before_layouts.blog')
    </section>

    <section class="ftco-section ftco-no-pb" id="pastor-section">
    	@include('before_layouts.pastors')
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      @include('before_layouts.contact')
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div id="map" class="bg-white"></div>
		</section>

		<section class="ftco-gallery ftco-section ftco-no-pb mb-4">
    	@include('before_layouts.gallery')
	</section>
	--}}
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      @include('before_layouts.footer')
	</footer>
	
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @include('before_layouts.javascript')
    
  </body>
</html>