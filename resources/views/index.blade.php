@extends('template')
@section('content')

<!-- DateTimePicker Link -->

<script src="{{asset('js/DateTimePicker.js')}}"></script>
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
                <button class="joinbtn animated fadeInRight">Become A Member</button>
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
            <button class="joinbtn animated fadeInUp">Become A Member</button>
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
        <div class="col-lg-6 col-md-6 col-sm-12 text-center">
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
                    <h4>Quality Training Courses</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis porro quidem eum. Quibusdam architecto dolorum </p>
                </div>
            </div>
            <div class="services d-flex">
                <div class="icon d-flex align-content-center justify-content-center">
                    <img src="{{asset('./img/trainerlogo.png')}}" class="servicepng">  
                </div> 
                <div class="servicetext">
                 <h4>Professional Trainers</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis porro quidem eum. Quibusdam architecto dolorum </p>
             </div>
         </div>
         <div class="services d-flex">
            <div class="icon d-flex align-content-center justify-content-center">
                <img src="{{asset('./img/clock.png')}}" class="servicepng">  
            </div> 
            <div class="servicetext">
                <h4>Flexible Time</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis porro quidem eum. Quibusdam architecto dolorum </p>
            </div>
        </div>
    </div>
</div>
</div>


<!-- End of Section One -->

<!-- Section Two -->
<div class="container-fluid sectiontwo">
    <div class="row" style="padding-top: 50px;">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <h2>Achieve Your Fitness Goals!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis placeat dolor, dolorem tempora maiores obcaecati, reiciendis
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
            <div class="product-card">
                <div class="card">
                    <div class="text-center">
                        <h3>Basic</h3>
                        <hr style="width: 10%; border-bottom:2px solid red;">
                        <div class="pricecard">
                            <h3><sup>$</sup><span class="price">39</span><span class="small">/mo</span></h3>
                            <p>Starter</p>
                            <p>Get Free WiFi</p>
                            <p>3 Days a Week Program</p>
                        </div>
                        <a href="" class="getitnowbtn" data-toggle="modal" data-target="#modalQuickView">Get It Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
            <div class="product-card">
                <div class="card">
                    <div class="text-center">
                        <h3>Gold</h3>
                        <hr style="width: 10%; border-bottom:2px solid red;">
                        <div class="pricecard">
                            <h3><sup>$</sup><span class="price">39</span><span class="small">/mo</span></h3>
                            <p>Women Training</p>
                            <p>Get Free WiFi</p>
                            <p>Fat Burn Pro</p>
                        </div>
                        <a href="" class="getitnowbtn">Get It Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
            <div class="product-card">
                <div class="card">
                    <div class="text-center">
                        <h3>Platinum</h3>
                        <hr style="width: 10%; border-bottom:2px solid red;">
                        <div class="pricecard">
                            <h3><sup>$</sup><span class="price">39</span><span class="small">/mo</span></h3>
                            <p>Professional Trainers</p>
                            <p>Month to Month</p>
                            <p>No Time Restrictions</p>
                        </div>
                        <a href="" class="getitnowbtn">Get It Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
            <div class="product-card">
                <div class="card">
                    <div class="text-center">
                        <h3>Free</h3>
                        <hr style="width: 10%; border-bottom:2px solid red;">
                        <div class="pricecard">
                            <h3><sup>$</sup><span class="price">39</span><span class="small">/mo</span></h3>
                            <p>Get Free WiFi</p>
                            <p>Month to Month</p>
                            <p>No Time Restrictions</p>
                        </div>
                        <a href="" class="getitnowbtn">Get It Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Section Two -->

<!-- Section Four -->
<div class="container-fluid sectionfour" style="background-image: url({{asset('./img/testimontials.jpg')}});">
    <div class="row" style="padding-top: 50px;padding-bottom: 50px;">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <h2>What Our Clients Say!</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12">
            <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <div class="testimontials">
                            <img src="{{asset('./img/trainer6.jpg')}}" alt="">

                            <h3 class="mb-4">Chan Thar Nyein</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ut nisi recusandae. Earum sequi repudiandae suscipit doloribus, inventore dolor laboriosam quia aspernatur velit, dolorem in, ad ut nisi quo dolores!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimontials">
                            <img src="{{asset('./img/trainer6.jpg')}}" alt="">

                            <h3 class="mb-4">Chan Thar Nyein</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ut nisi recusandae. Earum sequi repudiandae suscipit doloribus, inventore dolor laboriosam quia aspernatur velit, dolorem in, ad ut nisi quo dolores!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimontials">
                            <img src="{{asset('./img/trainer6.jpg')}}" alt="">

                            <h3 class="mb-4">Chan Thar Nyein</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ut nisi recusandae. Earum sequi repudiandae suscipit doloribus, inventore dolor laboriosam quia aspernatur velit, dolorem in, ad ut nisi quo dolores!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Section Four -->



<!-- Section Five -->
<div class="container-fluid sectionfive">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 text-center">
            <img src="{{asset('./img/man.png')}}"  class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-left discount">
            <h3>Fitness Classes This Summer.<br> Pay Now And Get <span style="color:red;font-size: 40px;">25%</span> Discount.</h3>
            <p class="pt-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate sed alias aspernatur itaque inventore repellendus ipsam officiis. Maxime debitis odio, quas sapiente reiciendis explicabo incidunt quidem! Laudantium impedit, molestias accusantium.</p>
            <button class="joinbtn mt-1">Become A Member</button>
        </div>
    </div>
</div>
<!-- End of Section Five -->

<!-- Section Three -->
<div class="container-fluid sectionthree">
    <div class="row" style="padding-top: 50px;padding-bottom: 30px;">
        <div class="col-lg-12 text-center">
            <h2>Get Your 3 Days <span style="color:red; font-size: 38px;">Free</span> Pass</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis placeat dolor, dolorem tempora maiores obcaecati, reiciendis
            </p>
        </div>
    </div>
    <div class="row pb-5 justify-content-center offset-lg-0 offset-md-4">
        <form class="form-inline" action="" >
            <div class="col-lg-3 col-md-12 pb-3">
                <div class="d-flex">
                    <div class=" d-flex align-content-center justify-content-center">
                         <i class="fa fa-user mt-2 mr-2" style="color:red;"></i>
                    </div> 
                    <div class="">
                        <input class="form-control"  placeholder="Enter Your Name"> 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 pb-3">
                <div class="d-flex">
                    <div class=" d-flex align-content-center justify-content-center">
                         <i class="fa fa-envelope mt-2 mr-2" style="color:red;"></i>
                    </div> 
                    <div class="">
                        <input class="form-control"  placeholder="Enter Your Email" > 
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 pb-3">
                <div class="d-flex">
                    <div class=" d-flex align-content-center justify-content-center">
                         <i class="fa fa-phone mt-2 mr-2" style="color:red;"></i>
                    </div> 
                    <div class="">
                        <input class="form-control"  placeholder="Enter Your Name" > 
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
        bottom: 30%;
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
        background-color: transparent;
        color: red;
        font-size: 16px;
        padding: 5px 20px;
        border-radius: 0;
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
        width: auto;
        height: 500px;
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
        font-size: 50px;
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
        color:red;
    }
    .getitnowbtn:hover,.appointmentbtn:hover{
        color:#fff;
        border-radius: 5px;
        transition-duration: 0.2s;
        background-color: red;
        color:#fff;
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
        border-bottom: 1px solid black;
    }
    .trainerselect select{
        border:none;
        background-color:#f1f1f1;
    }
    .trainerselect select option{
        background-color:#f1f1f1;
    }
    /*End of Modal Section*/
    

</style>



<!-- Modal: modalQuickView -->

<script>
     $(document).ready(function(){
   
     $("#dtBox").DateTimePicker();


   
 });
</script>
<div class="modal fade modalsection" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{asset('./img/lady.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3>Get Into Shape</h3>
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
                        <div class="form-group trainerselect">                          
                            <select class="form-control" onfocus='this.size=3;' onblur='this.size=1;' onchange='this.size=1; this.blur();' style="padding:0px;">
                                <option selected="selected">Need a Trainer?</option>
                                <option>Hello</option>
                                <option>Hello</option>
                                <option>Hello</option>
                                <option>Hello</option>
                                <option>Hello</option>
                                <option>Hello</option>
                            </select>
                        </div>
                        <a href="" class="appointmentbtn">Get It Now</a>
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