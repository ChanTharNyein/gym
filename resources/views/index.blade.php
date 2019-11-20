@extends('template')
@section('content')

<!-- Carousel Section -->
<link href="https://fonts.googleapis.com/css?family=Poppins|Raleway&display=swap" rel="stylesheet">
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="{{asset('img/home.jpg')}}"
                alt="First slide">
            <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption d-none d-md-block">
            <h4 class="headertext1 pl-2">Looking For</h4>
            <h1>Personal <span style="color: red">Trainer?</span></h1>
            <p class="">Don't Stop When You're Tired. Stop When You're Done.</p>
            <button class="joinbtn">Become A Member</button>
        </div>
    </div>
    <div class="carousel-item">
      <div class="view">
        <img class="d-block w-100" src="{{asset('img/home2.jpg')}}"
        alt="Third slide">
        <div class="mask rgba-black-light"></div>
    </div>
    <div class="carousel-caption d-none d-md-block" >
        <h4 class="headertext1 pl-2">Are You Ready To</h4>
        <h1><span style="color:red;">Get Fit</span>, Strong!</h1>
        <p class="">Get In Shape & Be Healthy. No Pain, No Gain.</p>
        <button class="joinbtn">Become A Member</button>
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
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <h2>We Care About What We Offer</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis placeat dolor, dolorem tempora maiores obcaecati, reiciendis voluptatem perspiciatis nulla qui repellat! Officiis rem nobis natus neque voluptatibus quod molestiae distinctio.</p>
        </div>
    </div>
</div>
<!-- End of Section Two -->

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
        font-size: 12px;
        font-weight: 500;
        padding: 5px 20px;
        border-radius: 0;
    }
    .joinbtn:hover{
        border-radius: 10px;
        transition-duration: 0.2s;
        background-color: red;
        color:#fff;
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
        color:black;
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
    .sectiontwo .row{
        padding-top: 50px;
    }
    .sectiontwo h2{
        font-weight: normal;
        padding-bottom: 25px;
    }
    /*Section Two*/


</style>
@endsection