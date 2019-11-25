@extends('template')
@section('content')
<!-- start banner Area -->


<section class="banner-area relative about-banner" id="home" style="background-image: url({{asset('./img/testimontials.jpg')}});">
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

<!-- Section Two -->
<div class="container-fluid sectiontwo">
	<div class="row" style="padding-top: 50px;">
		<div class="col-lg-12 col-md-12 col-sm-12 text-center">
			<h2>Achieve Your Fitness Goals!</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis placeat dolor, dolorem tempora maiores obcaecati, reiciendis
			</p>
		</div>
	</div>

	<div class="row pt-3">
        @foreach($trainer as $trainers)
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="xs-team">
				<div class="xs-team-thumb">
					<img  src="{{asset($trainers->image)}}" alt="Jhon Statham">
					<div class="xs-team-overlay d-flex align-items-center">
						<ul class="list-unstyled xs-team-share">
							<li>
								<a href="{{$trainers->facebook}}"><i class="fa fa-facebook fa-2x"></i></a>
							</li>
							<li>
								<a href="{{$trainers->gmail}}"><i class="fa fa-google fa-2x"></i></a>
							</li>
							<li>
								<a href="{{$trainers->instagram}}"><i class="fa fa-instagram fa-2x"></i></i></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="xs-team-content">
					<ul>
						<li><h3>{{$trainers->name}}</h3></li>
						<!-- <li><h5>Gymnast</h5></li> -->
						<li><button class="trainerinfo" data-toggle="modal" data-target="#modalQuickView" data-id="{{$trainers->id}}">View Profile</button></li>
					</ul>
				</div>
			</div>
		</div>
        @endforeach

	</div>
</div>

<!-- End of Section Two -->

<!-- Section One -->
<div class="container-fluid sectionone pt-5">
	<div class="row text-center">
		<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12">
			<h2 class="mb-3">What Our Services</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed est consequatur quod at minima suscipit a provident? Doloremque cupiditate ipsa itaque nam atque, repellat nostrum iste ducimus consectetur aspernatur.</p>
		</div>
	</div>
	<div class="row pt-5">
		<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
			<div class="trainerservices d-flex">
				<div class="icon d-flex align-content-center justify-content-center">
					<img src="{{asset('./img/aerobics.png')}}" class="servicepng">
				</div>
				<div class="servicetext pl-2 mb-4">
					<h4 class="pb-2">Aerobics</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis porro quidem eum. Quibusdam architecto dolorum </p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
			<div class="trainerservices d-flex">
				<div class="icon d-flex align-content-center justify-content-center">
					<img src="{{asset('./img/cardio.png')}}" class="servicepng">
				</div>
				<div class="servicetext pl-2">
					<h4 class="pb-2">Cardio</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis porro quidem eum. Quibusdam architecto dolorum </p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
			<div class="trainerservices d-flex">
				<div class="icon d-flex align-content-center justify-content-center">
					<img src="{{asset('./img/exercise.png')}}" class="servicepng">
				</div>
				<div class="servicetext pl-2">
					<h4 class="pb-2">Demonstrating Exercises</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis porro quidem eum. Quibusdam architecto dolorum </p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
			<div class="trainerservices d-flex">
				<div class="icon d-flex align-content-center justify-content-center">
					<img src="{{asset('./img/techniques.png')}}" class="servicepng">
				</div>
				<div class="servicetext pl-2">
					<h4 class="pb-2">Correct Techniques</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis porro quidem eum. Quibusdam architecto dolorum </p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
			<div class="trainerservices d-flex">
				<div class="icon d-flex align-content-center justify-content-center">
					<img src="{{asset('./img/emergency.png')}}" class="servicepng">
				</div>
				<div class="servicetext pl-2">
					<h4 class="pb-2">Emergency First Aid</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis porro quidem eum. Quibusdam architecto dolorum </p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
			<div class="trainerservices d-flex">
				<div class="icon d-flex align-content-center justify-content-center">
					<img src="{{asset('./img/dance.png')}}" class="servicepng">
				</div>
				<div class="servicetext pl-2">
					<h4 class="pb-2">Dance Club</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis porro quidem eum. Quibusdam architecto dolorum </p>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- End of Section One -->

<!-- Section Three -->
<div class="container-fluid traineradvertise" style="background-color: #f1f1f1;">
	<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 pt-5 pl-5">
				<h1 class="pb-4">Fitness <span style="color:red;">Trainer</span></h1>
				<h3>Call now for a</h3>
				<h2>FREE</h2>
				<h3>One-on-One Consultation!</h3>
				<p>For more information on <br> fitness programs call or text us at <br> <span style="color:red;font-size: 20px;">+959 123-456-789</span></p>
			</div>
		<div class="col-lg-6 col-md-6 col-sm-12 pt-md-5 pt-lg-0">
			<img src="{{asset('./img/lady2.png')}}" alt="" class="img-fluid">
		</div>
	</div>
</div>
<!-- End of Section Three -->



<!-- Style -->
<style>

	/*Section One*/
	.sectionone{
		background-color: #121212;
	}
	.sectionone h2{
		font-family:'Poppins';
		font-weight: normal;
	}
	.sectionone h2, .sectionone p{
		color:#fff;
	}
	.trainerservices img{
		width: 50px;
		height: 50px;
	}
	/*End of Section One*/

	/*Section Two*/

	.trainerinfo{
		background-color: transparent;
		display: inline-block;
        border:1px solid red;
        color: red;
        padding:5px 10px;
        text-decoration: none;
        font-size: 16px;
        padding: 5px 20px;
        border-radius: 0;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .trainerinfo:hover{
        color:#fff;
        border-radius: 5px;
        transition-duration: 0.2s;
        background-color: red;
        color:#fff;
        transition:0.3s;
    }
	.sectiontwo{
		background: #f1f1f1;
	}
	.sectiontwo h2{
		font-weight:normal;
	}
	.xs-team {
		margin:35px;
		-webkit-box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.08);
		box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.08);
		-webkit-transition: all 0.4s ease;
		-o-transition: all 0.4s ease;
		transition: all 0.4s ease;
		box-shadow:0 5px 5px rgba(0,0,0,0.5);
	}

	.xs-team:hover {
		-webkit-box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.08);
		box-shadow: 0 20px 20px rgba(0,0,0,0.5);
		transition: 0.7s;
        transform: translateY(-10px);
	}

	.xs-team:hover .xs-team-overlay {
		right: 0;
	}
	.xs-team-content ul h5{
		padding-top: 5px;
	}

	.xs-team-content ul h3{
		color:#777777;
	}
	.xs-team-content ul h5{
		color:red;
	}
	.xs-team-thumb {
		position: relative;
		overflow: hidden;
	}

	.xs-team-thumb img {
		width: 100%;
		-webkit-transition: all 0.43s ease;
		-o-transition: all 0.43s ease;
		transition: all 0.43s ease;
		background-color: #121212;
	}

	.xs-team-thumb:hover img {
		-webkit-transform: translateX(-40px) scale(1.1);
		-ms-transform: translateX(-40px) scale(1.1);
		transform: translateX(-40px) scale(1.1);
	}

	.xs-team-content {
		padding: 23px 20px 25px;
		text-align: center;
		background-color: #f1f1f1;
	}

	.xs-team-overlay {
		position: absolute;
		top: 0;
		right: -100px;
		height: 100%;
		background-color: white;
		-webkit-transition: all 0.4s ease;
		-o-transition: all 0.4s ease;
		transition: all 0.4s ease;
	}

	.xs-team-share {
		display: table-cell;
		vertical-align: middle;
	}

	.xs-team-share a {
		display: block;
		padding: 12px;
		color: red;
	}

	.xs-team-trainers .xs-team,
	.xs-team-about .xs-team {
		margin-bottom: 30px;
	}

	.xs-team-about .xs-team-share a {
		padding: 16px 18px;
		font-size: 20px;
	}

	.xs-section-padding {
		padding: 90px 0;
	}
	.xs-pb-sm {
		padding-bottom: 70px;
	}
	/*End of Section Two*/

	/*Section Three*/
	.traineradvertise h1{
	font-family: 'Poppins';
	color:#777777;
	font-size: 45px;
	}
	.traineradvertise h3{
		font-family: 'Poppins';
		color:#777777;
		font-size: 25px;
	}
	.traineradvertise h2{
		color:red;font-size: 45px;letter-spacing: 10px;
	}
	.traineradvertise p{
		font-size: 18px;
		padding-top: 30px;
		line-height: 30px;
	}
	/*End of Section Three*/

	/*Modal Section*/
	.modalsection h3{
		color: black;
		font-family:'Poppins';
		font-weight: normal;

	}
	.intro{
		padding-bottom:15px;
	}
	.modalsection h3 span{
		color: red;
	}
	.firstinfo {
		font-family: 'Poppins';
	}
	.secondinfo{
		padding-top: 10px;
	}
	.trainerinfoicon{
		margin-top: 30px;
	}
	.trainerinfoicon li {
		display: inline-block;
		padding: 0 20px;
	}
	.trainerinfoicon li a{
		color:red;
	}


	/*End of Modal Section*/


</style>
<div class="modal fade modalsection" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="background-color: #f1f1f1;">
    	<div class="modal-header">
        <h4 class="modal-title" style="letter-spacing: 2px; font-size: 16px; text-transform:uppercase; color: black;font-weight: normal;"><span style="color: red;font-size: 20px; text-transform: capitalize;">Olympia</span> Fitness Center</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="" id="cover_img" alt="" class="img-fluid" style="height: 450px; width: auto;">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                	<div class="mt-4">
	                    <h3 class="firstinfo">Hello,</h3>
	                    <h3 class="secondinfo">I am<span style="font-size:35px" id="trainer_name"></span></h3>
	                    {{--<h3 class="mt-4" style="font-size: 20px;">Look What I Can Do?</h3>
	                    <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione adipisci porro dolor tenetur iure saepe </p>--}}

	                    <h3 class="mt-4" style="font-size: 20px;">About Me?</h3>
	                    <p class="mt-2" id="about"></p>

	                    <ul class="trainerinfoicon">
	                    	<li><a href="" id="facebook"><i class="fa fa-facebook fa-2x"></i></a></li>
	                    	<li><a href="" id="google"><i class="fa fa-google fa-2x"></i></a> </li>
	                    	<li><a href="" id="instagram"><i class="fa fa-instagram fa-2x"></i></i></a></li>
	                    </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Style -->

@endsection
