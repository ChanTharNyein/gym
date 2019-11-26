@extends('template')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home" style="background-image: url({{asset('./img/home3.jpg')}});background-size: cover;background-position: center center;">

  <div class="overlay overlay-bg"></div>
  <div class="container">
   <div class="row d-flex align-items-center justify-content-center">
    <div class="about-content col-lg-12">
     <h1 class="text-white">
      Blog Details Page
    </h1>
    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Blog </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> Blog Details Page</a></p>
  </div>
</div>
</div>
</section>
<!-- End banner Area -->

<!-- Section Three -->

<div class="container-fluid sectionthree" style="background-color: #f2f0f0;">
  <div class="row" style="padding-top: 50px;" >
    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
      <h2 style="font-family:'Poppins'; font-weight: normal;">Technical…Practical…Theoretically Interesting</h2>
      <p>A directory of wonderful things,we smash you with the information that will make your fitness journey easier. Really.
      </p>
    </div>
  </div>
</div>
<!-- End of Section Three -->				  


<!-- Start post-content Area -->
<section class="post-content-area single-post-area" style="background-color: #f2f0f0; padding-bottom:50px;">

  <div class="container">
   <div class="row">
    <div class="col-lg-8 posts-list offset-lg-2">
     <div class="single-post row">
      <div class="col-lg-12">
       <div class="feature-img">
        <img class="img-fluid" src="{{asset($post->image)}}" alt="">
      </div>
    </div>
    <div class="col-lg-4  col-md-3 meta-details">

     <div class="user-details row">
      <p class="user-name col-lg-12 col-md-12">{{$post->trainer->name}}<span class="lnr lnr-user pl-1"></span></p>
      <p class="date col-lg-12 col-md-12">{{$post->created_at->format('d/m/Y')}}<span class="lnr lnr-calendar-full pl-1"></span></p>
      <p class="comments col-lg-12 col-md-12">06 Comments<span class="lnr lnr-bubble pl-1"></span></p>																			
    </div>
  </div>
  <div class="col-lg-8 col-md-9">
   <h3 class="posts- text-black mt-3 mb-2">{{$post->title}}</h3>
   <p class="excert" style="text-align: justify;">
    {{$post->description}}
  </p>
</div>
</div>            
</div>
</div>

<div class="comments-area offset-lg-2 col-lg-8">
  <h4 class="text-dark">05 Comments</h4>
  <div class="comment-list">
    <div class="single-comment justify-content-between d-flex">
      <div class="user justify-content-between d-flex">

        <div class="thumb">
          <img src="" alt="">
        </div>

        <div class="desc">
          <h5><a href="#">Emilly Blunt</a></h5>
          <p class="date">December 4, 2017 at 3:12 pm </p>
          <p class="comment">
            Never say goodbye till the end comes!
          </p>
          <div id="showcomments"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="card my-4 commentsection offset-lg-2 col-lg-8">
  <h5 class="card-header commentheader">Leave a Comment</h5>
  <div class="card-body">

    <form name="frm" id="frm">
      <div class="form-group">
        <textarea class="form-control"  name="body" rows="3" id="body"></textarea>
        <input type="hidden" id="pid" name="pid" value="{{$post->id}}">
      </div>
      <!-- <button class="click" type="submit" name="submit">Submit</button> -->
      <div class="col-lg-2 offset-lg-5">
        <a href="" class="click" type="submit" id="pid" name="pid" value="{{$post->id}}">Send</a>
      </div>
    </form>

  </div>
</div>

</div>

</div>
</div>
</div>
</section>

<script type="text/javascript">
  $(document).ready(function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var pid = $('#pid').val();
    $('.click').click(function () {
      var body = $('#body').val();
      if(body==''){
        alert("Text Body is Empty Please Enter One Word");
      }

      $.post("{{route('comment.store')}}",{description:body,pid:pid},function (response) {
                    //alert(response);
                    $('#body').val('');
                  });
      getComments(pid);
    });
    getComments(pid);
    function getComments(pid) {
      $.post("{{route('getcomments')}}",{pid:pid},function (response) {
                    //console.log(response);
                    var html='';
                    $.each(response,function (i,v) {
                      html+=`<div class="media mb-4">
                      <div>
                      <h5 class="mt-0 text-black mr-5">${v.user_id.name}</h5></div>
                      <div class="media-body ml-5 d-block">
                      ${v.body}
                      </div>
                      </div>`;
                    });
                    $('#showcomments').html(html);
                  });
    }

  });

</script>
<!-- End post-content Area -->
@endsection

<style>
  .click{
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
    .click:hover{
    color:#fff;
    border-radius: 5px;
    transition-duration: 0.2s;
    background-color: red;
    color:#fff;
    transition:0.3s;
    }
  .post-content-area{
    background-color: #e8e6eb;
  }
  .commentheader{
    color:#777777;
    text-align: center;
  }
  .commentsection{
    margin-bottom: 0px;
  }
</style>
