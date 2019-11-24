@extends('template')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home" style="background-image: url({{asset('./img/home3.jpg')}});">	
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis placeat dolor, dolorem tempora maiores obcaecati, reiciendis
                  </p>
              </div>
          </div>
      </div>
      <!-- End of Section Three -->				  

<!-- Start post-content Area -->
<section class="post-content-area single-post-area" style="background-color: #f2f0f0;">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post row">
                <div class="col-lg-12">
                   <div class="feature-img">
                      <img class="img-fluid" src="img/home3.jpg" alt="">
                  </div>									
              </div>
              <div class="col-lg-3  col-md-3 meta-details">
               
               <div class="user-details row">
                  <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span class="lnr lnr-user"></span></p>
                  <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span class="lnr lnr-calendar-full"></span></p>
                  
                  <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span class="lnr lnr-bubble"></span></p>
                  <!-- <ul class="social-links col-lg-12 col-md-12 col-6">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-github"></i></a></li>
                     <li><a href="#"><i class="fa fa-behance"></i></a></li>
                 </ul> -->																				
             </div>
         </div>
         <div class="col-lg-9 col-md-9">
           <a class="posts-title" href="#"><h3>Astronomy Binoculars A Great Alternative</h3></a>
           <p class="excert">
              MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.
          </p>
          <p>
              Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
          </p>
          <p>
              Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
          </p>
      </div>
      
  </div>
  <div class="navigation-area">
    <div class="row">
       <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
          <!-- <div class="thumb">
             <a href="#"><img class="img-fluid" src="img/prev.jpg" alt=""></a>
         </div> -->
         <!-- <div class="arrow">
             <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
         </div> -->
         <!-- <div class="detials">
             <p>Prev Post</p>
             <a href="#"><h4 class="text-dark">Space The Final Frontier</h4></a>
         </div> -->
     </div>
     <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
      <!-- <div class="detials">
         <p>Next Post</p>
         <a href="#"><h4 class="text-dark">Telescopes 101</h4></a>
     </div> -->
    <!--  <div class="arrow">
         <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
     </div> -->
     <!-- <div class="thumb">
         <a href="#"><img class="img-fluid" src="img/next.jpg" alt=""></a>
     </div>	 -->									
 </div>									
</div>
</div>
<div class="comments-area">
    <h4 class="text-dark">05 Comments</h4>
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    <img src="img/cm.jpg" alt="">
                </div>
                <div class="desc">
                    <h5><a href="#">Emilly Blunt</a></h5>
                    <p class="date">December 4, 2017 at 3:12 pm </p>
                    <p class="comment">
                        Never say goodbye till the end comes!
                    </p>
                </div>
            </div>
            <!-- <div class="reply-btn">
             <a href="" class="btn-reply text-uppercase">reply</a> 
         </div> -->
     </div>
 </div>                                     				
</div>
<div class="comment-form mb-5">
    <h4 class="text-dark">Leave a Comment</h4>
    <form>
       <div class="form-group form-inline">
         <div class="form-group col-lg-6 col-md-12 name">
           <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
       </div>
       <div class="form-group col-lg-6 col-md-12 email">
           <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
       </div>										
   </div>
   <div class="form-group">
      <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
  </div>
  <div class="form-group">
      <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
  </div>
  <a href="#" class="primary-btn text-uppercase">Post Comment</a>	
</form>
</div>
</div>
<div class="col-lg-4 sidebar-widgets">
 <div class="widget-wrap" style="background-color: #f1f1f1;">
    <div class="single-sidebar-widget popular-post-widget">
       <h4 class="popular-title">Popular Posts</h4>
       <div class="popular-post-list">
          <div class="single-post-list d-flex flex-row align-items-center">
             <div class="thumb">
                <img class="img-fluid" src="img/pp1.jpg" alt="">
            </div>
            <div class="details">
                <a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
                <p>02 Hours ago</p>
            </div>
        </div>											
    </div>
</div>

<div class="single-sidebar-widget post-category-widget">
   <h4 class="category-title">Post Catgories</h4>
   <ul class="cat-list">
      <li>
         <a href="#" class="d-flex justify-content-between">
            <p>Technology</p>
            <p>37</p>
        </a>
    </li>	
</ul>
</div>	
<div class="single-sidebar-widget newsletter-widget">
   <h4 class="newsletter-title">Newsletter</h4>
   <p>
      Here, I focus on a range of items and features that we use in life without
      giving them a second thought.
  </p>
  <div class="form-group d-flex flex-row">
    <div class="col-autos">
     <div class="input-group">
       <div class="input-group-prepend">
         <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
         </div>
     </div>
     <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" >
 </div>
</div>
<a href="#" class="bbtns">Subcribe</a>
</div>	
<p class="text-bottom">
  You can unsubscribe at any time
</p>								
</div>

</div>
</div>
</div>
</div>	
</section>
<!-- End post-content Area -->
@endsection	
