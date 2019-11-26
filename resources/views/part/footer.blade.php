<div class="footer pt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
        <h3 class="mb-3" style="font-size: 30px;color: red;">Olympia</h3>
        <p style="text-align: justify;">Olympia Gym, founded by Midnight Sun Group, is located in Mandalay, Myanmar. Achieves your fitness goals with us!</p>
        <a href="{{ URL::to('/contact')}}" class="joinbtn">Get In Touch</a>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
        <h4>Contact Info</h4>
        <ul class="list pt-2">
          <li><i class="fa fa-map-marker"></i><a href="index.html">&nbsp;Olympia Fitness, Mandalay.</a></li>
          <li><i class="fa fa-envelope-square"></i><a href="">&nbsp;olympia@gmail.com</a></li>
          <li><i class="fa fa-phone"></i><a href="contant/contact.html"> &nbsp;+959 123 456 789</a></li>
          <li>Mon - Fri : 9AM to 5PM</li>
          <li>Sat - Sun : 9AM to 2PM</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
        <h4>Useful Links</h4>
        <ul class="list pt-2">
          <li><a href="/">Home</a></li>
          <li><a href="/bloghome">Blog</a></li>
          <li><a href="/class">Classes</a></li>
          <li><a href="{{route('ourtrainer')}}">Trainers</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
       <h4 class="mb-3">News Letter</h4>
       <p>Subscribe and get the latest news.</p>
       <div class="form-group d-flex flex-row">
         <div class="col-autos">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
              </div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" style="border-top:none;border-bottom: none;">
          </div>
        </div>
        <a href="#" class="bbtns">Subcribe</a>
      </div>  
      <p class="text-bottom">
        You can unsubscribe at any time
      </p>  
    </div>
  </div>
  <hr style="width: 100%; border:1px solid white;">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 text-center">
      <p class="mb-3">Copyright @ 2019. Designed By Midnight Sun </p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
      <ul style="list-style: none;" class="list list2">
        <li><i class="fa fa-facebook"></i></li>
        <li><i class="fa fa-instagram"></i></li>
        <li><i class="fa fa-twitter"></i></li>
      </ul>
    </div>     
  </div>
</div>
</div>
<style>
  .footer{
    background-color: black ; /*#1b1229*/
    color: #fff;
  }
  .footer h4{
    border-left: 2px solid red;
    padding-left: 5px;
  }
  ul{
    list-style: none;
  }
  .list li a{
    color:white;
    text-decoration: none;
  }
  .list li{
    margin: 10px 0;
  }
  .list2 li{
    display: inline-block;
    padding: 0 20px;
    margin-top: -10px;
  }
  h4,h3,h5{
    color:white;
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
        transition:0.3s;
    }
  .form-control {
    border-left: none !important;
    border-right: none !important;
    border-radius: 0px;
    font-size: 13px;
    color: #ccc;
    padding: 9px;
    padding-left: 0px;
  }
  .bbtns {
    background: red; /*#f6214b*/
    color: #fff;
    font-size: 12px;
    font-weight: 500;
    padding: 5px 20px;
    border-radius: 0;
  }
  .bbtns:hover{
    color: #fff;
  }
  .form-control:focus {
    box-shadow: none;
    border-color: #ccc;
  }
  .input-group-text {
    background: #fff;
    border-radius: 0px;
    vertical-align: top;
  }

</style>

