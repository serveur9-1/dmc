@extends('layout')
@section('title','DMC_Consulting')
@section('content')

 <section class="hero-wrap hero-wrap-2" style="background-image:url({{asset('images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Accueil<i class="ion-ios-arrow-forward"></i></a></span> <span>Formation<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Nos Formations</h1>
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
						<div class="story-wrap d-md-flex align-items-center">
							<div class="img" style="background-image:url({{asset('images/image_1.jpg')}});" ></div>
							<div class="text pl-md-5">
								<h4>Story About: <span>John Doe</span></h4>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								<p><a href="{{route('SingleService')}}" class="btn btn-primary">Read more</a></p>
							</div>
						</div>

						<div class="story-wrap d-md-flex align-items-center">
							<div class="img" style="background-image:url({{asset('images/image_2.jpg')}});"></div>
							<div class="text pl-md-5">
								<h4>Story About: <span>John Doe</span></h4>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								<p><a href="{{route('SingleService')}}" class="btn btn-primary">Read more</a></p>
							</div>
						</div>

						<div class="story-wrap d-md-flex align-items-center">
							<div class="img" style="background-image:url({{asset('images/image_3.jpg')}});"></div>
							<div class="text pl-md-5">
								<h4>Story About: <span>John Doe</span></h4>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								<p><a href="{{route('SingleService')}}" class="btn btn-primary">Read more</a></p>
							</div>
						</div>

						<div class="story-wrap d-md-flex align-items-center">
							<div class="img" style="background-image:url({{asset('images/image_4.jpg')}});"></div>
							<div class="text pl-md-5">
								<h4>Story About: <span>John Doe</span></h4>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								<p><a href="{{route('SingleService')}}" class="btn btn-primary">Read more</a></p>
							</div>
						</div>

						<div class="story-wrap d-md-flex align-items-center">
							<div class="img" style="background-image:url({{asset('images/image_5.jpg')}});"></div>
							<div class="text pl-md-5">
								<h4>Story About: <span>John Doe</span></h4>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								<p><a href="{{route('SingleService')}}" class="btn btn-primary">Read more</a></p>
							</div>
						</div>

						<div class="row mt-5">
		          <div class="col">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Services</h3>
                <li><a href="#">Sensibilisation <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Prise en charge <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Coaching <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Formation<span class="ion-ios-arrow-forward"></span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Jan. 30, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Jan. 30, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Jan. 30, 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection