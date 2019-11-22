@extends('template')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home" style="background-image: url('../img/banner-bg.jpg');">
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

<!-- Start post-content Area -->
<section class="post-content-area single-post-area">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list offset-lg-2">
             <div class="single-post row">
                <div class="col-lg-12">
                   <div class="feature-img">
                      <img class="img-fluid" src="{{asset($post->image)}}" alt="">
                  </div>
              </div>
              <div class="col-lg-3  col-md-3 meta-details">

               <div class="user-details row">
                  <p class="user-name col-lg-12 col-md-12 col-6">{{$trainer[0]->name}}<span class="lnr lnr-user"></span></p>
                  <p class="date col-lg-12 col-md-12 col-6">{{$post->created_at}} <span class="lnr lnr-calendar-full"></span></p>
                  <p class="comments col-lg-12 col-md-12 col-6">06 Comments <span class="lnr lnr-bubble"></span></p>
             </div>
         </div>
         <div class="col-lg-9 col-md-9">
           <h3 class="posts- text-black mt-3 mb-5">{{$post->title}}</h3>
           <p class="excert">
              {{$post->description}}
          </p>
      </div>

  </div>
<div class="comment-form">
    <h4 class="text-dark">Leave a Comment</h4>
    {{--<form name="frm" id="frm">--}}
    <div class="form-group">
        <textarea class="form-control"  name="body" rows="3" id="body"></textarea>


        <input type="hidden" id="pid" name="pid" value="{{$post->id}}">
    </div>
    <button class="btn btn-primary click" type="submit" name="submit">Submit</button>
    {{--</form>--}}
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

            $.post("{{route('comment.store')}}",{body:body,pid:pid},function (response) {
                //alert(response);
                $('#body').val('');
            });
            getComments(pid);
        });
        getComments(pid);
        function getComments(pid) {
            $.post("{{route('getcomments')}}",{pid:pid},function (response) {
                console.log(response);
                var html='';
                $.each(response,function (i,v) {
                    html+=`<div class="media mb-4">
                              <div class="media-body">
                                <h5 class="mt-0">${v.user_id.name}</h5>
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
