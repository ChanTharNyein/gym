<div class="footer pt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 pb-3">
        <h3 class="mb-3" style="font-size: 30px;color: red;">Olympia</h3>
        <p style="text-align: justify;">Olympia Gym, founded by Midnight Sun Group, is located in Mandalay, Myanmar. Achieves your fitness goals with us!</p>
        <a href="{{ URL::to('/contact')}}" class="joinbtn mt-0">Get In Touch</a>
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
       <h4 class="mb-3">Keep In Touch</h4>
       <p style="text-align: justify;">Follow us on social media channels so you can connect with <span style="color:red;font-size: 18px;">Olympia</span> wherever you go! Stay with us for more upcoming information.</p>
       <ul style="list-style: none;" class="list list2">
         <li><a href="https://www.facebook.com/pg/Olympia-Fitness-Center-111915103616134/about/?ref=page_internal" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
         <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Finstagram.com%2Fol.ympia666%3Ffbclid%3DIwAR04mNq3bK6HfXyyqFOh36CLlN-XgQcIbLXLXi5WpyZQUFS-v8ZTElGE5Ow&h=AT3-Ujhe2L-CH5ICmDkKqoEJOArWpjTqeUMJoqr8TXModEpRpPg2xmjzO8DDGeHH-D15S6Qv5jDqQxfy1M96WKRNvLlWrGE1NdR-7i60kNEsrtoU-tKW_sAHtTLssQ" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
         <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Ftwitter.com%2FOlympia39851779%3Ffbclid%3DIwAR0ykZ89RpaeszVoW1GbZmIprArc5_0VEvPTMoRE9SxBxVfOacAPfHZOU9E&h=AT3-Ujhe2L-CH5ICmDkKqoEJOArWpjTqeUMJoqr8TXModEpRpPg2xmjzO8DDGeHH-D15S6Qv5jDqQxfy1M96WKRNvLlWrGE1NdR-7i60kNEsrtoU-tKW_sAHtTLssQ" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
       </ul>
    </div>
  </div>
  <hr style="width: 100%; border:1px solid white;">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
      <p class="mb-3">Copyright @ 2019. Designed By Midnight Sun Group.</p>
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


