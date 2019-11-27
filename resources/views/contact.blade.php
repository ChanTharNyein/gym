@extends('template')
@section('content')
<!-- start banner Area -->

<section class="banner-area relative about-banner" id="home" style="background-image: url('{{asset('./img/home3.jpg')}}');background-size: cover;background-position: center center;">


	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Contact Us
				</h1>
				<p class="text-white link-nav">Home<span class="lnr lnr-arrow-right"></span>Contact Us</p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Section On -->
<section class="section-about" style="background-color: #f1f1f1">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<h2 class="text-center mt-5">We are here for you!</h2>
						<h3 class="text-center mt-2">We build <span style="color: red;">your dream</span></h3>
					</div>
				</div>
				<div class=" col-lg-12 mt-5">
					<div class="row pt-1 pb-1">
						<div class="col-lg-1">
							<span class="lnr lnr-pointer-right"></span>
						</div>
						<div class="col-lg-11">
							<h5 class="about-title">Analyze Your Goal</h5>
							<p class="mt-2">At first, you should know what you want.In fitness, there are no short cuts. It involves immense discipline and hard work.</p>
						</div>
					</div>
					<div class="row pt-1 pb-1">
						<div class="col-lg-1">
							<span class="lnr lnr-pointer-right"></span>
						</div>
						<div class="col-lg-11">
							<h5 class="about-title">Work Hard On It</h5>
							<p class="mt-2">Next,you must keep that goal for trying yourselves.That's one thing you learn in sports. You don't give up; you fight to the finish.</p>
						</div>
					</div>
					<div class="row pt-1 pb-1">
						<div class="col-lg-1">
							<span class="lnr lnr-pointer-right"></span>
						</div>
						<div class="col-lg-11">
							<h5 class="about-title">Improve Your Performance</h5>
							<p class="mt-2">It keeps you on your toes. You’re ready to turn your walks into jogs, lift heavier weights, or swim faster than you might have thought you ever would.</p>
						</div>
					</div>
					<div class="row pt-1 pb-1">
						<div class="col-lg-1">
							<span class="lnr lnr-pointer-right"></span>
						</div>
						<div class="col-lg-11">
							<h5 class="about-title">Achieve Your Perfect Body</h5>
							<p class="mt-2">To try a perfect body , you will need to do : Build Muscle,Loss Fat,Get In Shape, and Improve Health etc.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-5">
				<div class="align-self-stretch">
					<img src="{{asset('./img/couplecontact.png')}}" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of Section One -->

<!-- Section Tow -->
<div class="cool-facts-area section-padding-100-0 bg-img bg-overlay" style="background-image: url({{asset('./img/contactbg.jpg')}});background-size: cover; background-attachment: fixed;">
	<div class="container">
		<div class="row" style="padding-top: 70px;padding-bottom: 70px;">

			<!-- Single Cool Facts -->
			<div class="col-12 col-sm-6 col-lg-3">
                <?php $no=1; ?>
				<div class="single-cool-fact text-center">
					<img src="{{asset('./img/exercise.png')}}">
                    @foreach($users as $user)
                        <h5 style="display:none;">{{$no++}}</h5>
                    @endforeach
					<h2 class="mt-4"><span class="counter" data-count="{{$no}}">0</span></h2>
					<p>Happy Clients</p>
				</div>
			</div>
			<!-- Single Cool Facts -->
			<div class="col-12 col-sm-6 col-lg-3">
                <?php $nu=1; ?>
				<div class="single-cool-fact text-center">
					<img src="{{asset('./img/aerobics.png')}}">
					<!-- <span class="lnr lnr-bicycle" style="font-size: 80px; color: red;"></span> -->
                    @foreach($trainers as $trainer)
                        <h5 style="display:none;">{{$nu++}}</h5>
                    @endforeach
					<h2 class="mt-4"><span class="counter" data-count="{{$nu}}">0</span></h2>
					<p>Trainers</p>
				</div>
			</div>

			<!-- Single Cool Facts -->
			<div class="col-12 col-sm-6 col-lg-3">
                <?php $num=1; ?>
				<div class="single-cool-fact text-center">
					<img src="{{asset('./img/techniques.png')}}">
					<!-- <span class="lnr lnr-clock" style="font-size: 80px; color: red;"></span> -->
                    @foreach($packages as $package)
                        <h5 style="display:none;">{{$num++}}</h5>
                    @endforeach
					<h2 class="mt-4"><span class="counter" data-count="{{$num}}">0</span></h2>
					<p>Packages</p>
				</div>
			</div>

			<!-- Single Cool Facts -->
			<div class="col-12 col-sm-6 col-lg-3">
                <?php $nun=1; ?>
				<div class="single-cool-fact text-center">
					<img src="{{asset('./img/dance.png')}}">
					<!-- <span class="lnr lnr-dinner" style="font-size: 80px; color: red;"></span> -->
                    @foreach($classes as $class)
                        <h5 style="display:none; ">{{$nun++}}</h5>
                    @endforeach
					<h2 class="mt-4"><span class="counter" data-count="{{$nun}}">0</span></h2>
					<p>Classes</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End of Section Tow -->

<!-- Section Three -->
<section class="contact-area section-padding-100" style="background-color: #f1f1f1;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="contact-title">
					<h1 class="text-dark text-center mt-5 mb-mb-0">Let's get together</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-12 col-sm-12 pt-lg-5">
				<div class="map-area">
				  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.801837207067!2d96.09045301395032!3d21.942168285510785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d689c4f2a49%3A0x7dc5ef273e2c02be!2sMingalar%20Mandalay!5e0!3m2!1sen!2smm!4v1574666825796!5m2!1sen!2smm" ></iframe>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="mb-4 text-center pt-md-3">
					<h3 class="pb-2" style="color:red;">Don't be a stranger</h3>
					<h3 style="color:#777777;">Just say Hello</h3>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<img src="{{asset('./img/gymlogo.png')}}" alt="" style="width: 100px;height: auto;" class="mb-5">
						<div class="services d-flex mb-2">
			                <div class="icon d-flex align-content-center justify-content-center">
			                    <i class="fa fa-map-marker" style="color:red;font-size: 30px;"></i>
			                </div>
			                <div class="servicetext pl-3">
			                    <h4>Where We Are?</h4>
			                    <p>Lorem ipsum dolor sit amet,</p>
			                </div>
			            </div>
			            <div class="services d-flex mb-2">
			                <div class="icon d-flex align-content-center justify-content-center">
			                    <i class="fa fa-envelope" style="color:red;font-size: 20px;"></i>
			                </div>
			                <div class="servicetext pl-3">
			                    <h4>Need Help?</h4>
			                    <p>olympiafitnesscenter@gmail.com</p>
			                </div>
			            </div>
			            <div class="services d-flex mb-2">
			                <div class="icon d-flex align-content-center justify-content-center">
			                    <i class="fa fa-phone" style="color:red;font-size: 25px;"></i>
			                </div>
			                <div class="servicetext pl-3">
			                    <h4>Feel Like Talking?</h4>
			                    <p>olympiafitnesscenter@gmail.com</p>
			                </div>
			            </div>
						<div class="text-center mt-4">
							<ul class="contacticon">
								<li><a href=""><i class="fa fa-facebook-f"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-md-6" style="background-color:rgba(0,0,0,0.1);margin-bottom: 15px;">
						<div class="contact-content" >
							<!-- Contact Form Area -->
                            <div class="contact-form-area my-4">
                                <form action="{{url('sendemail/send')}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"  required="required" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required="required" value="" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" required="required" value="">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message"  placeholder="Message" required="required"></textarea>
                                    </div>
                                    <button class=" fitness-btn" name="send" type="submit">Send Message</button>
                                </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of Section Three -->


<style>
	/*Section One*/
	.section-about h2{
		text-transform: uppercase;
	    font-family: 'Poppins';
	    font-weight: normal;
	    color: black;
	    letter-spacing: 3px;
	}
	.section-about h3{
		font-family: 'Poppins';
	    font-weight: normal;
	    color:#777777;
	    text-transform: capitalize;
	}
	.text p{
		font-size: 14px;
	}
	.text h5{
		color: red;
	}
	.row .lnr:not(.lnr-arrow-right) {
		font-size: 25px;
		color: red;
	}
	.about-title{
		color: black;
		font-family: 'Poppins';
		font-weight: normal;
		font-size: 18px;
	}
	/*End of Section One*/

	/*Section Two*/
	.counter {
		margin: 1.5%;
		color:#f1f1f1;
		font-size: 30px;
		width: 200px;
		height: 200px;
		vertical-align: middle;
	}
	.single-cool-fact p{
		color:#f1f1f1;
	}
	.single-cool-fact img{
		width: 70px;
		height: 70px;
	}
	.bg-overlay {
		position: relative;
		z-index: 2;
		background-position: center center;
		background-size: cover; }

	.bg-overlay::after {
		background-color: rgba(0, 0, 0, 0.6);
		position: absolute;
		z-index: -1;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		content: ""; }
	/*End of Section Two*/

	/*Section Three*/
    .fitness-btn{
        border-color: red;
        background-color: transparent;
        color: red;
        font-size: 16px;
        padding: 5px 20px;
        border-radius: 0;
    }
    .fitness-btn:hover{
        border-radius: 5px;
        transition-duration: 0.2s;
        background-color: red;
        color:#fff;
        transition:0.3s;
    }
	.contacticon li {
		display: inline-block;
	}
	.contacticon li i{
		font-size: 25px;
		color:red;
		padding: 0 15px;
	}
	.services h4{
		color:#777777;
		font-weight: normal;
		font-size: 16px;
	}
	.contact-area h1{
		font-family: 'Poppins';
		font-size: 30px;
		font-weight: normal;
		text-transform: capitalize;
	}
	.contact-area h3{
		font-family: 'Poppins';
	}

	.contact-content .contact-form-area .form-group {
    position: relative;
    z-index: 9; }
    .contact-content .contact-form-area .form-group::after {
      content: '';
      width: 100%;
      height: 1px;
      background: -webkit-linear-gradient(to right, red, red);
      background: linear-gradient(to right, red, red);
      bottom: 0;
      left: 0;
      position: absolute;
      z-index: 10;
      opacity: 0;
      visibility: hidden;
      -webkit-transition-duration: 500ms;
      transition-duration: 500ms; }
    .contact-content .contact-form-area .form-group:hover::after {
      opacity: 1;
      visibility: visible; }
  .contact-content .contact-form-area .form-control {
    position: relative;
    z-index: 10;
    height: 35px;
    width: 100%;
    background-color: #eef3f6;
    font-size: 12px;
    margin-bottom: 15px;
    border: none;
    border-radius: 0;
    padding: 15px 25px;
    color:black;
     }
    .contact-content .contact-form-area .form-control:focus {
      box-shadow: none; }
  .contact-content .contact-form-area textarea.form-control {
    height: 180px;
    color: black;
     }
	/*Section Three*/
	.icon .lnr {
    font-size: 30px;
    color: red;
  }
  .contact-details p{
    font-size: 20px;
  }
/*End of Section Three*/
/*Section Four*/
/*.map-area {
  position: relative;
  z-index: 2; }
.map-area iframe {
width: 100%;
height: 500px;
border: none;
margin-bottom: 0; }*/
.map-area {
        position: relative;
        padding-bottom: 90%;
        padding-top: 13%;
        /*height: 0;*/
        overflow: hidden;
    }
    .map-area iframe {
        position: absolute;
        top: 10;
        /*padding-left: 5%;*/
        width: 95% !important;
        height: 80% !important;
        /*border: 2px solid #777777;*/
        box-shadow: 0 3px 3px rgba(0,0,0,0.5);
    }
/*End of Section Four*/
		</style>

		<script>
			$.easing.easeOutExpo = function(x, t, b, c, d) {
				return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
			}

			$('.counter').each(function() {
				var $this = $(this),
				countTo = $this.attr('data-count');

				$({
					countNum: $this.text()
				}).animate({
					countNum: countTo
				},

				{

					duration: 10000,
					easing: 'easeOutExpo',
					step: function() {
						$this.text(Math.floor(this.countNum));
					},
					complete: function() {
						$this.text(this.countNum);
        //alert('finished');
    }

});
			});
		</script>
<script>
    var msg = '{{Session::get('success')}}';
    var exit = '{{Session::has('success')}}';
    if(exit){
        alert(msg);
    }
</script>

		@endsection
