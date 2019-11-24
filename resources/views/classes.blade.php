@extends('template')
@section('content')
<!-- start banner Area -->
<script src="{{asset('js/DateTimePicker.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/DateTimePicker.css')}}">
<section class="banner-area relative about-banner" id="home" style="background-image: url({{asset('./img/home3.jpg')}});">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Classes		
				</h1>	
				<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="services.html"> Classes</a></p>
			</div>	
		</div>
	</div>
</section>
<!-- End banner Area -->	

<!-- Start offred Area -->
<section class="offred-area section-gap">
	<div class="container">
		<div class="row section-title">
			<h1>If you appreciate quality, then we are for you.</h1>
			<p>Who are in extremely love with eco friendly system.</p>
		</div>					
		<div class="row pl-2 pr-2">	
      <div class="col-lg-4 col-md-6  mb-5 p-lg-4 mb-md-5">
        <div class="hovereffect">
          <div class="card">
            <img src="{{asset('./img/youga2.jpg')}}" class="card-img-top" alt="...">
            <div class="overlay"><br>
              <ul class="hovereffect-grid-ul-child">
                <li>Mon</li>
                <li>2:30am</li>
              </ul><br>
              <ul class="hovereffect-grid-ul-child ">
                <li>Sun</li>
                <li>2:30am</li>
              </ul>
              
              <a class="joinbtn" href="" data-toggle="modal" data-target="#modalDetail">Detail</a>
              <a href="" class="joinbtn" data-toggle="modal" data-target="#modalJoin">Join Now</a>

            </div>
          </div>
          <div class="card-body">
            <ul class="classlist">
              <li class="pr-5 classname">Youga</li>
              <li class="pl-5 classprice"><sup>$</sup><span>39.99</span></li>
            </ul>
            <div style="border-bottom: 2px solid #777777; width: 100%; padding-top: 10px;"></div>
            <p style="padding-top: 10px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum debitis voluptates, quam animi autem sequi?</p>
            <ul class="classlist">
             <!--  <li><i class="fa fa-user fa-2x pr-4" style="color:red;"></i></li> -->
             <li><img src="{{asset('./img/trainericon.png')}}" width="50" height="50"></li>
             <li><h3 class="pl-4">Ilona Jeklain</h3></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </div>
</section>
<!-- End offred Area -->

<!-- Start top-course Area -->

<!-- End top-course Area -->		

<!-- Start callto Area -->
<section class="callto-area section-gap relative" style="background-image: url('{{asset('./img/background.jpg')}}')">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row pt-5">
			<div class="call-wrap mx-auto">
				<h1>It's never late to start, join us today!</h1>
				<p>
					Thinking about overseas adventure travel? Have you put any thought into the best places to go when it comes to overseas adventure travel? Nepal is one of the most popular places of all.
				</p>
				<a href="#" class="joinbtn">Become a Member</a>
     </div>
   </div>
 </div>

 <div class="modal fade modalsection " id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="background-color: #f1f1f1;">
      <div class="modal-header">
        <h4 class="modal-title" style="letter-spacing: 2px; font-size: 16px; text-transform:uppercase; color: black;font-weight: normal;"><span style="color: red;font-size: 20px; text-transform: capitalize;">Olympia</span> Fitness Center</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container classdetail">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 " style="padding:0;">
              <img src="{{asset('./img/youga2.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li style="float: left;"><h4>Youga</h4></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li style="float: right;"><h4><sup>$</sup>39.99</h4></li>
                  </ul>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-lg-6">
                  <ul class="hovereffect-grid-ul-child" style="float: left;border:1px solid red">
                    <li>Mon</li>
                    <li>2:30am</li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="hovereffect-grid-ul-child" style="float: right;border:1px solid red">
                    <li>Fri</li>
                    <li>2:30am</li>
                  </ul>
                </div>
              </div>
              <p><span style="font-size: 18px; color:red; font-weight:bold;">Ilona Jeklain </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officiis neque fugiat consequatur laudantium possimus asperiores dicta corporis praesentium tempore! Laboriosam expedita repellendus quisquam deserunt dignissimos corrupti illo eligendi consequuntur.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade modalsection" id="modalJoin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <div class="row mt-4 mb-4">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{asset('./img/youga2.jpg')}}" alt="" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <h3>Get Thin and Win</h3>
            <h3 style="font-size: 20px;">Appointment <span>Information</span></h3>
            <form action="">
              <div class="form-group">
                <label for="appointmentname"><i class="fa fa-user" ></i></label>
                <input type="text" placeholder="Your Name" id="appointmentname">
              </div>
              <div class="form-group">
                <label for="appointmentphone"><i class="fa fa-phone" ></i></label>
                <input type="number" placeholder="Phone No." id="appointmentphone">
              </div>
              <div class="form-group">
               <label for="appointmentdatetime"><i class="fa fa-calendar"></i></label>
               <input type="text" placeholder="Appointment Date & Time" data-field="datetime" readonly id="appointmentdatetime">
             </div> 
             <a href="" class="appointmentbtn">Join Now</a>
             <div id="dtBox"></div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>

<script>
 $(document).ready(function()
 {

   $("#dtBox").DateTimePicker();
   
 });
</script>


</section>
<!-- End callto Area -->

<style>
  /*Modal Section*/


  .classdetail h4{
    color:#777777;
    font-size: 25px;
  }
    
  .classdetail p{
    color:#777777;
    text-align: justify;
    /*padding-top: 10px;*/
  }

  .modalsection h3{
    color:black;
    text-align: center;
    font-family: 'Poppins';
    font-weight: normal;
    text-transform:uppercase;
    font-size: 16px;
    letter-spacing: 1px;
  }
  .modalsection h3 span{
    color:red;
    letter-spacing: 1px;
  }
  .modalsection form{
    margin-top: 20px;
  }
  .modalsection input{
    outline: none;
    background:transparent;
    border: none;
  }
  .modalsection i{
    font-size: 16px;
    padding-right: 10px;
    color:red;
  }
  .modalsection input:focus{
    border-bottom: 1px solid black;
  }
  /*End of Modal Section*/
  .appointmentbtn{
    border:1px solid red;
    background-color: transparent;
    color: red;
    font-size: 16px;
    padding: 5px 20px;
    border-radius: 0;
  }
  .appointmentbtn:hover{
    border-radius: 5px;
    transition-duration: 0.2s;
    background-color: red;
    color:#fff;
    transition:0.3s;
  }
  .classlist h3{
    font-family: 'Poppins';
    font-weight: normal;
    font-size: 30px;
    color:#777777;
  }
  .section-title h1{
    font-family: 'Poppins';
    font-size: 30px;
    color: black;
    font-weight: normal;
  }
  .offred-area{
    background-color: #f1f1f1;
  }
  .joinbtn{
    background-color: transparent;
    display: inline-block;
    border:1px solid red;
    color: #fff;
    padding:5px 10px;
    text-decoration: none;
    font-size: 16px;
    padding: 5px 20px;
    border-radius: 0;
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .joinbtn:hover{
    color:#fff;
    border-radius: 5px;
    transition-duration: 0.2s;
    background-color: red;
    color:#fff;
    /*transition:0.3s;*/
  }
  .classlist{
    list-style: none;
  }
  .classlist li{
    display: inline-block;
  }

  .callto-area{
    background-size: cover;
    background-repeat: no-repeat;
  }
  .classname{
    font-size: 25px;
    color:#777777;
  }
  .classprice{
    color:red;
  }
  .classprice sup{
    font-size: 18px;
  }
  .classprice span{
    font-size: 30px;
  }

  .hovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
     box-shadow: 0 5px 5px rgba(0,0,0,0.5);
  }
  .hovereffect:hover{
    transition: 0.7s;
    transform: translateY(-10px);
    box-shadow: 0 20px 20px rgba(0,0,0,0.5);
  }

  .hovereffect .overlay {
    position: absolute;
    overflow: hidden;
    left: 10%;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: scale(0,1);
    -ms-transform: scale(0,1);
    transform: scale(0,1);
  }

  .hovereffect:hover .overlay {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  }

  .hovereffect img {
    display: block;
    position: relative;
    -webkit-transition: all 0.35s;
    transition: all 0.35s;
  }

  .hovereffect:hover img {

    filter: brightness(0.6);
    -webkit-filter: brightness(0.6);
  }

  .hovereffect h2 {
    text-transform: uppercase;
    text-align: center;
    position: relative;
    font-size: 17px;
    background-color: transparent;
    color: #FFF;
    padding: 1em 0;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(0,-100%,0);
    transform: translate3d(0,-100%,0);
  }

  .hovereffect a.info {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    text-transform: uppercase;
    color: #fff;
    border: 1px solid #fff;
    margin: 50px 0 0 0;
    background-color: transparent;
    -webkit-transform: translateY(-100px);
    -ms-transform: translateY(-200px);
    transform: translateY(-200px);
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }

  .hovereffect:hover a,  .hovereffect:hover h2 {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }
  .hovereffect-overly ul{
   margin:0;
   padding:0;
   list-style-type:none
  }

  .hovereffect-overly ul{
   bottom:0;
   left:0;
   right:0;
   text-align:center;
   top:45%;
   opacity:0
  }

  .hovereffect-item:hover 
  .hovereffect-overly ul{
  opacity:1;
  transition:all .5s
  }


  .hovereffect-grid-ul-parent{
   position:relative;
   bottom:inherit;
   top:50%;
   transform:translateY(-50%)
  }

  .hovereffect-overly ul li{
   display:inline-block;
   margin:0
  }

  .hovereffect-grid-ul-parent li{
   display:block;
   margin:0 0 3px
  }

  .hovereffect-grid-ul-child li{
   display:inline-block;
   font-size:14px;
   font-weight:600;
   padding:5px 10px;
   text-transform:uppercase
  }

  .hovereffect-grid-ul-child li:first-child{
   background-color:red;
   color:#fff;
   width:60px
  }

  .hovereffect-grid-ul-child li:last-child{
   background:#fff;
   color:red;
   margin-left:-4px;
   width:76px
  }

 </style>

 @endsection
