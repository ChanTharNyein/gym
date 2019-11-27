@extends('template')
@section('content')

<!-- DateTimePicker Link -->

<script src="{{asset('js/DateTimePicker.js')}}"></script>
<script>
    var msg = '{{Session::get('alert')}}';
    var exit = '{{Session::has('alert')}}';
    if(exit){
        alert(msg);
    }
</script>
<link rel="stylesheet" href="{{asset('css/DateTimePicker.css')}}">
<link href="https://fonts.googleapis.com/css?family=Poppins|Raleway&display=swap" rel="stylesheet">
<!-- Carousel Section -->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="{{asset('img/home1.jpg')}}"
                alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption d-none d-md-block">
                <h4 class="headertext1 pl-2 animated fadeInLeft">Looking For</h4>
                <h1 class="animated fadeInRight">Personal <span style="color: red">Trainer?</span></h1>
                <p class="animated fadeInLeft">Don't Stop When You're Tired. Stop When You're Done.</p>
                @guest
                <a href="{{route('login')}}" class="joinbtn animated fadeInRight">Become A Member</a>
                @endguest
            </div>
        </div>
        <div class="carousel-item">
          <div class="view">
            <img class="d-block w-100" src="{{asset('img/home2.jpg')}}"
            alt="Third slide">
            <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption d-none d-md-block" >
            <h4 class="headertext1 pl-2 animated fadeInDown">Are You Ready To</h4>
            <h1 class="animated slideInLeft"><span style="color:red;">Get Fit</span>, Strong!</h1>
            <p class="animated slideInRight">Get In Shape & Be Healthy. No Pain, No Gain.</p>
            @guest
            <a href="{{route('login')}}" class="joinbtn animated fadeInUp">Become A Member</a>
            @endguest
        </div>
    </div>
</div>
<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
<!-- End of Carousel Section -->

<!-- Section One -->
<div class="container-fluid sectionone">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 text-center my-md-auto">
            <img src="{{asset('./img/couple.png')}}"  class="img-fluid couple">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-5 mb-5">
            <h4>Get into shape now!</h4>
            <h3>Exercise Regularly <span style="color:red;font-weight: bold;">Stay Healthy</span>.</h3>
            <div class="services d-flex">
                <div class="icon d-flex align-content-center justify-content-center">
                    <img src="{{asset('./img/quality.png')}}" class="servicepng">
                </div>
                <div class="servicetext">
                    <h4>Quality Training Services</h4>
                    <p>Our Personal Trainers provide a unique Valet Fitness Experience to every client. The experience is key to motivate and unlock your transformation.</p>
                </div>
            </div>
            <div class="services d-flex">
                <div class="icon d-flex align-content-center justify-content-center">
                    <img src="{{asset('./img/trainerlogo.png')}}" class="servicepng">
                </div>
                <div class="servicetext">
                 <h4>Professional Trainers</h4>
                 <p>If you've been trying to increase your fitness activity but keep making excuses or are unsure of the best course of action, the Olympia team of certified professionals can help.</p>
             </div>
         </div>
         <div class="services d-flex">
            <div class="icon d-flex align-content-center justify-content-center">
                <img src="{{asset('./img/clock.png')}}" class="servicepng">
            </div>
            <div class="servicetext">
                <h4>Flexible Time</h4>
                <p>Olympia fitness center provides flexible workout schedule opportunities. You will find flexibility in activities, facilities and services to provide you with the best experience.
                </p>
            </div>
        </div>
    </div>
</div>
</div>


<!-- End of Section One -->

<!-- Section Two -->
<div class="container-fluid sectiontwo">
    <div class="row" style="padding-top: 20px;">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <h2>Achieve Your Fitness Goals!</h2>
            <p class="col-lg-8 offset-lg-2 pb-3">Discover a fitter tomorrow. Take care of your body, it's the only place you have to live. Fitness is not about being better than else. It's about being better than you used to be.
            </p>
        </div>
    </div>
    <div class="row">
        @foreach($packages as $package)
        <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
            <div class="product-card">
                <div class="card">
                    <div class="text-center">
                        <h3>{{$package->title}}</h3>
                        <hr style="width: 10%; border-bottom:2px solid red;">
                        <div class="pricecard">
                            <h3><sup>$</sup><span class="price">{{$package->price}}</span><span class="small">/mo</span></h3>
                            <p>{{$package->service1}}</p>
                            <p>{{$package->service2}}</p>
                            <p>{{$package->service3}}</p>
                            <p>{{$package->service4}}</p>

                        </div>
                        @guest
                        <a class="getitnowbtn" href="{{route('login')}}">Get It Now</a>
                        @else
                        <a href="" class="getitnowbtn" data-toggle="modal"  data-id="{{$package->id}}" data-target="#packageModal">Get It Now</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
<!-- End of Section Two -->

<!-- Section Four -->

<div class="container-fluid sectionfour" style="background-image: url({{asset('./img/testimontials.jpg')}}); background-size: cover; background-position: center center;">
    <div class="row" style="padding-top: 50px;padding-bottom: 50px;">

        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <h2>What Our Clients Say!</h2>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-8 offset-lg-2  col-sm-12">

            <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">

                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->


                <div class="carousel-inner text-center">
                    @foreach($review as $key=>$review)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <div class="testimontials">
                            <img src="{{asset('./img/trainer.jpg')}}" alt="">
                            <h3 class="mb-4">{{$review->user->name}}</h3>
                            <p>{{$review->description}}</p>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

</div>

<!-- End of Section Four -->



<!-- Section Five -->
<div class="container-fluid sectionfive">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 text-center my-md-auto">
            <img src="{{asset('./img/man.png')}}"  class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-left discount">
            <h3>Fitness Classes This Summer.<br> Pay Now And Get <span style="color:red;font-size: 40px;">25%</span> Discount.</h3>
            <p class="pt-3 text-justify">Somewhere between first tries and finish lines. Pillows flight and pushing limits.That's where you find Fitness. How you spend your day determines when you reach your goals. And seeing your progress helps you see what's possible.</p>
            @guest
            <a href="{{route('login')}}" class="joinbtn mt-1">Become A Member</a>
            @endguest
        </div>
    </div>
</div>
<!-- End of Section Five -->

<!-- Section Three -->
<div class="container-fluid sectionthree">
    <div class="row" style="padding-top: 50px;padding-bottom: 30px;">
        <div class="col-lg-12 text-center">
            <h2 class="pb-2">Get Your 3 Days <span style="color:red; font-size: 38px;">Free</span> Pass</h2>
            <p>Your time start now. Book your free 3 days trial. Put yourself to the test with our free workouts!
            </p>
        </div>
    </div>
    <div class="row pb-5 justify-content-center offset-lg-0 offset-md-4">
        <form class="form-inline" action="{{route('freeform')}}" >
            @csrf
            <div class="col-lg-3 col-md-12 pb-3">
                <div class="d-flex">
                    <div class=" d-flex align-content-center justify-content-center">
                         <i class="fa fa-user mt-2 mr-2" style="color:red;"></i>
                    </div>
                    <div class="">
                        <input class="form-control ml-3" name="name" placeholder="Enter Your Name">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 pb-3">
                <div class="d-flex">
                    <div class=" d-flex align-content-center justify-content-center">
                         <i class="fa fa-envelope mt-2 mr-2" style="color:red;"></i>
                    </div>
                    <div class="">
                        <input class="form-control" name="email"  placeholder="Enter Your Email" >
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 pb-3">
                <div class="d-flex">
                    <div class=" d-flex align-content-center justify-content-center">
                         <i class="fa fa-phone mt-2 mr-2" style="color:red;"></i>
                    </div>
                    <div class="">
                        <input class="form-control" type="number" name="phone"  placeholder="Enter Your Phone" >
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 pb-3">
                <div class="d-flex">
                    <div class=" d-flex align-content-center justify-content-center">
                         <a href="" class="freebtn">Get My Free Pass</a>
                    </div>
                </div>
            </div>


            <!-- <input class="form-control"  placeholder="Enter Your Name" >
            <input  class="form-control"  placeholder="Enter Your Email" >
            <input  class="form-control"  placeholder="Enter Your Phone No"> -->
            <!-- <a href="" class="btn">Get My Free Pass</a> -->
          </form>
    </div>
</div>
<!-- End of Section Three -->

<style>
    /*Carousel Section*/
    .carousel-caption h4{
        border-left: 2px solid red;
    }
    .carousel-caption{
        width: 500px;
        position: absolute;
        bottom: 27%;
        right: 55%;
        z-index: 20;
        color: white;
        text-align: left;
        /*  text-shadow: 0 1px 2px rgba(0,0,0,.6);*/
    }
    .headertext1,.carousel-caption h1{
        padding:10px 0px;
        font-family: 'Raleway', sans-serif;
        text-transform: uppercase;
        color:#fff;
    }
    .carousel-caption h1{
        font-weight: bold;
    }
    .carousel-caption p{
        font-size: 16px;
    }
    .joinbtn{
        border-color: red;
        background-color: transparent;
        color: #fff;
        font-size: 16px;
        padding: 5px 20px;
        border-radius: 0;
    }
    .freebtn{
        border:1px solid red;
        background-color: transparent;;
        color:red;
        font-size: 16px;
        padding:5px 20px;
    }
    .joinbtn:hover,.freebtn:hover{
        border-radius: 5px;
        transition-duration: 0.2s;
        background-color: red;
        color:#fff;
        transition:0.3s;
    }
    /*Carousel Section*/

    /*Section One*/
    .sectionone{
        background-color: #f1f1f1;
    }
    .couple{
        width: 400px;
        height: auto;
    }
    .sectionone .row{
        padding-top: 50px;
    }
    .sectionone h4{
        text-transform: uppercase;
        color:black;
        font-weight: bold;
        letter-spacing: 2px;
    }
    .sectionone h3{
        padding-top:20px;
        padding-bottom: 45px;
        text-transform: uppercase;
        font-family: 'Poppins';
        font-weight: normal;
        color:#777777;
        letter-spacing: 3px;
    }
    .services{
        padding-right: 50px;
    }
    .servicepng{
        width: 35px;
        height: 35px;
    }
    .servicetext{
        margin-left: 30px;
    }
    .servicetext h4{
        text-transform: none;
        font-weight: normal;
        padding-bottom: 10px;
        letter-spacing: 0px;
    }
    .servicetext p{
        text-align:justify;
    }
    /*Section One*/

    /*Section Two*/
    .sectiontwo{
        background-color: #f1f1f1;
    }

    .sectiontwo h2{
        font-weight: normal;
        padding-bottom: 25px;
    }

    .card{
        overflow: hidden;
        background-color: black;
        border-radius: 2px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);

    }
    .card:hover {
        transition: 0.7s;
        transform: translateY(-10px);
        box-shadow: 0 20px 20px rgba(0,0,0,0.5);

    }
    .card h3{
        padding-top: 30px;
        font-family: 'Poppins';
        font-weight: normal;
    }
    .product-card{
        width: 100%;
    }
    .pricecard p{
        color:#fff;
    }
    .pricecard sup{
        color:red;
    }
    .pricecard p span{
        font-size: 30px;
    }
    .pricecard h3{
        padding-bottom: 30px;
    }
    sup{
        font-size: 30px;
    }
    .price{
        font-size: 45px;
    }

    .getitnowbtn,.appointmentbtn{
        display: inline-block;
        border:1px solid red;
        color: #fff;
        padding:5px 10px;
        text-decoration: none;
        font-size: 16px;
        padding: 5px 20px;
        border-radius: 0;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    .appointmentbtn{
        display: inline-block;
        border:1px solid red;
        padding:5px 10px;
        text-decoration: none;
        font-size: 16px;
        padding: 5px 20px;
        border-radius: 0;
        margin-top: 10px;
        margin-bottom: 10px;
        color:red;
    }
    .getitnowbtn:hover,.appointmentbtn:hover{
        color:#fff;
        border-radius: 5px;
        transition-duration: 0.2s;
        background-color: red;
        transition:0.3s;
    }

    /*Section Two*/

    /*Section Three*/
    .sectionthree{
        background-color: #f1f1f1;
    }
    .sectionthree h2{
        /*text-transform: uppercase;*/
        font-weight: normal;
    }
    .sectionthree form input{
        outline: none;
        background:transparent;
        border: none;
        border-bottom:1px solid;
    }
    .sectionthree form input:focus{
        border-bottom: 1px solid black;
        background-color: transparent;
    }



    /*Section Three*/

    /*Section Four*/
    .sectionfour{
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-color: rgba(0,0,0,0.5);
    }
    .testimontials img{
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin-bottom: 10px;
    }
    .testimontials h3{
        font-family: 'Poppins';
        font-size: 20px;
        color: #fff;
        font-weight: normal;
    }
    .testimontials p{
        margin-bottom:100px;
        color:#fff;
    }
    .sectionfour .carousel-indicators li {
        background-color: red;
    }
    .sectionfour h2{
        text-transform: uppercase;
        font-weight: normal;
        color: #fff;
    }

    /*Sectio Four*/

    /*Section Five*/
    .sectionfive{
        background-color: #121212;
    }
    .sectionfive h3{
        text-transform: uppercase;
        font-family: 'Poppins';
        font-weight: normal;
        font-size: 30px;
    }
    .discount{
        margin-top: 50px;
        margin-bottom: 50px;
        padding-right: 50px;
    }
    /*Section Five*/

    /*Modal Section*/
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
    .modalsection input, .modalsection select{
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
        /*border-bottom: 1px solid black;*/
        border-width: 80%;
    }
    .trainerselect select{
        border:none;
        background-color:#f1f1f1;
    }
    .trainerselect select option{
        background-color:#f1f1f1;
    }
    .trainerselect select option:hover{
        color:red;
    }
    /*End of Modal Section*/


</style>



<!-- Modal: modalQuickView -->

<script>
     $(document).ready(function(){

     $("#dtBox").DateTimePicker();



 });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script>
    $(document).ready(function(){
        $("#formsub").validate({
            // Specify validation rules
            rules: {
                name: "required",
                lastname: "required",
                phone: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 15,
                },

            },
            messages: {
                name: {
                    required: "Please enter first name",
                },
                phone: {
                    required: "Please enter phone number",
                    digits: "Please enter valid phone number",
                    minlength: "Phone number field accept only 10 digits",
                    maxlength: "Phone number field accept only 10 digits",
                },
            },

        });
    });
</script>
<div class="modal fade modalsection"  id="packageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="background-color: #f1f1f1;">
        <div class="modal-header">
        <h3 class="modal-title" style="letter-spacing: 2px;"><span style="color: red;font-size: 20px; text-transform: capitalize;">Olympia</span> Fitness Center</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 my-md-auto">
                    <img src="{{asset('./img/lady.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3 class="mt-2">Get Into Shape</h3>
                    <h3 style="font-size: 20px;">Appointment <span>Information</span></h3>
                    <form action="{{route('orderpackage.store')}}" method="post" id="formsub">
                        @csrf
                        <div class="form-group">
                            <label for="appointmentname"><i class="fa fa-user" ></i></label>
                            <input type="text" name="name" placeholder="Your Name" id="appointmentname">
                        </div>
                        <div class="form-group">
                            <label for="appointmentphone"><i class="fa fa-phone" ></i></label>
                            <input type="number" name="phone" placeholder="Phone No." id="appointmentphone">
                        </div>
                        <div class="form-group">
                           <label for="appointmentdatetime"><i class="fa fa-calendar"></i></label>
                           <input type="text" name="appointdate" placeholder="Appointment Date & Time" data-field="datetime" readonly id="appointmentdatetime">
                            <input type="hidden" name="package_id" id="package_id" value="">
                        </div>
                        <div class="form-group trainerselect">
                            <label for="appointmenttrainer">Choose a Trainer</label>
                            <select  class="form-control" onfocus='this.size=3;' onblur='this.size=1;' onchange='this.size=1; this.blur();' style="padding:0px;" name="trainer_id" >

                                <option selected="selected">Trainer List</option>
                                @foreach($trainer as $trainer)
                                    <option value="{{$trainer->id}}">{{$trainer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" value="Get It Now" name="submit" href="" class="appointmentbtn" style="border:1px solid red;">
                        <div id="dtBox"></div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
