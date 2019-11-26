@extends('template')
@section('content')

<!-- start banner Area -->
			<section class="banner-area relative" id="home" style="background-image: url({{asset('./img/home3.jpg')}});">

				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Blog Page
							</h1>
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Blog </a></p>
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
			<section class="post-content-area pt-5" style="background-color: #f2f0f0;">
				<div class="container">
					<div class="row">

						<div class="col-lg-8 posts-list">
							<div class="single-post row">
                                @foreach($post as $post)
								<div class="col-lg-3  col-md-3 meta-details">

									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{$post->trainer->name}}</a> <span class="lnr lnr-user" style="color:red;"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$post->created_at}}</a> <span class="lnr lnr-calendar-full" style="color:red;"></span></p>

										<p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span class="lnr lnr-bubble" style="color:red;"></span></p>
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="{{asset($post->image)}}" alt="">
									</div>
									<a class="posts-title" href="blog-single.html"><h3 class="text-dark">{{$post->title}}</h3></a>
									<p class="excert">
										{{$post->decription}}
									</p>
									<a href="{{route('postid',$post->id)}}" class="primary-btn">View More</a>
								</div>
                                @endforeach
							</div>
		                    <!-- <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav> -->
						</div>

						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap"  style="background-color: #f1f1f1;">
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
                                        @foreach($category as $category)
										<li>
											<a href="{{route('categoryid',$category->id)}}" class="d-flex justify-content-between">
												<p>{{$category->name}}</p>
											</a>
										</li>
                                        @endforeach
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
