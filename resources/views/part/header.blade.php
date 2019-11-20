<!-- 
<header id="header">
		<div class="header-top">
			<div class="container">
	  		<div class="row align-items-center justify-content-center">
	  			<div class="col-md-4 col-4 header-top-left no-padding">
	        		<a href="mailto:support@colorlib.com"><span class="lnr lnr-location"></span></a>
	        		<a class="contact-texts" href="mailto:support@colorlib.com">support@colorlib.com</a>		
	  			</div>
	  			<div class="col-md-4 col-4 header-top-bottom no-padding">
	        		<a href="index.html"><img class="img-fluid" src="{{asset('img/logo.png')}}" alt="" title="" /></a>			
	  			</div>
	  			<div class="col-md-4 col-4 header-top-right no-padding">
	        		<a class="contact-texts" href="tel:+440 123 12 658 439">+440 123 12 658 439</a>
	        		<a href="tel:+440 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
	  			</div>				  							  			
	  		</div>			  					
			</div>
	</div>
	<div class="container main-menu">
		<div class="row align-items-center justify-content-center">	
			<nav id="nav-menu-container">
				<ul class="nav-menu">
				  <li class="menu-active"><a href="">Home</a></li>
				  <li><a href="">Trainers</a></li>
				  <li><a href="">Classes</a></li>
				  <li><a href="">Blog</a></li>
				  <li><a href="">Contact</a></li>				  
				</ul>
			</nav>		
		</div>
	</div>
</header> -->



<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand d-lg-none" href="#"><img class="gymlogo" src="{{asset('./img/gymlogo.png')}}" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

      <ul class="navbar-nav ml-5 mr-5">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Trainers</a>
        </li>
      </ul>
      <a class="navbar-brand d-none d-lg-block" href="#"><img class="gymlogo" src="{{asset('./img/gymlogo.png')}}" alt=""></a>  
      <ul class="navbar-nav ml-5 mr-5">
        <li class="nav-item">
          <a class="nav-link" href="#">Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<style>

  .navbar-brand{
    margin:0 40px;
  }
  .nav-item{
    margin: 0 40px;
  }
  .navbar {
    padding-top: 5px;
    padding-bottom: 5px;
    background: transparent;
    color: #333;
    transition: all 0.3s;
  }
  .navbar a {
    color: #fff !important;
  }

  .navbar button {
    color: inherit !important;
  }

  .navbar.compressed {
    padding-top: 0px;
    padding-bottom: 0px;
    background: black;
    color: black;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
    transition-duration: 1s;
  }
  .custom-toggler.navbar-toggler {
    border-color:white;
  }
  .gymlogo{
    width: 80px;
    height:80px;
  }
</style>
<script>
  $(document).ready(function() {
    $(window).on("scroll", function() {
      if ($(window).scrollTop() >= 20) {
        $(".navbar").addClass("compressed");
      } else {
        $(".navbar").removeClass("compressed");
      }
    });
  });

</script>
