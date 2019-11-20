@extends('template')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Trainers				
				</h1>	
				<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="trainers.html"> Trainers</a></p>
			</div>	
		</div>
	</div>
</section>
<!-- End banner Area -->	

<!-- Start trainer Area -->
<section class="trainer-area section-gap" id="trainer">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Our Experienced Trainers</h1>
					<p>As you pour the first glass of your favorite Chianti.</p>
				</div>
			</div>
		</div>						
		<div class="row justify-content-center d-flex align-items-center">
			<div class="col-lg-3 col-md-6 single-trainer">
				<div class="thumb">
					<img class="img-fluid" src="{{asset('img/t1.jpg')}}" alt="">
					<div class="align-items-center justify-content-center d-flex">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="meta-text mt-30 text-center">
					<h4>Ethel Davis</h4>
					<p>Managing Director (Sales)</p>									    	
				</div>
			</div>		
		</div>
	</div>	
</section>
<!-- End trainer Area -->			

@endsection
