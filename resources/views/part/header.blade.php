
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand d-lg-none" href="/"><img class="gymlogo" src="{{asset('./img/gymlogo.png')}}" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

      <ul class="navbar-nav ml-5 mr-5"> <!-- ml-5 mr-5 -->
        <li class="nav-item">
          <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/bloghome">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('ourtrainer')}}">Trainers</a>
        </li>
      </ul>

      <a class="navbar-brand d-none d-lg-block" href="/"><img class="gymlogo" src="{{asset('./img/gymlogo.png')}}" alt=""></a>
      <ul class="navbar-nav ml-5 mr-5">
        <li class="nav-item">
          <a class="nav-link" href="/class">Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
          @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Join
          </a>
          <div class="dropdown-menu dropdown-menu-right animated" aria-labelledby="navbarDropdown">

              <a class="nav-link" href="{{route('login')}}">Login</a>
              <a class="nav-link" href="{{route('register')}}">Register</a>
          </div>
        </li>
          @else
              <li class="dropdown nav-item">
                
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{Auth::user()->name}}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      @hasrole('admin')
                      <a class="nav-link" href="{{route('admin.index')}}">Admin Pannel</a>
                      @endhasrole
                      <a class="dropdown-item" href="{{route('logout')}}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>

                      <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
    </div>
  </nav>
</div>
<style>

  .navbar-brand{
    margin:0 20px;
  }
  .navbar-nav{
    margin:0 50px;
  }
  .nav-item{
    margin: 0 20px;
    font-size: 16px;
  }
  .gymlogo{
    width:80px;
    height: 60px;
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

  .dropdown-menu{
    background-color:black;
  }
  .dropdown-menu .dropdown-item:hover{
    background-color:transparent;
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
<script>
  $(document).ready(function(){
     // Add slideDown animation to Bootstrap dropdown when expanding.
  $('.dropdown').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // Add slideUp animation to Bootstrap dropdown when collapsing.
  $('.dropdown').on('hide.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });
  })
</script>