@extends('layouts.master')

@section('content')

<div class="content">
  <div class="container">

  <!-- Main Title  -->
 
    <div class="row align-items-center g-5 py-5">
      <div class="col-lg-6 pt-4">
          <br>
        <h1 class="fw-bold lh-1 ">Game Development</h1>
        
      </div>
    </div>
 

  <!--Course image & description-->
  <div class="container">
    <div class="row align-items-center g-5 ">
      <div class="col-md-12 col-sm-12 col-lg-6">
        <img src="{{url('/img/background7.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-5 offset-lg-1">
        <h4 class=" fw-bold lh-1 mb-3">Course Detail:</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper egestas pharetra enim vel adipiscing sagittis, amet porttitor donec. Congue ac varius lorem eleifend pellentesque et. Massa in mattis risus augue risus amet ut consectetur volutpat. Aliquet nec posuere a duis tortor dui eget sed sem.</p>
        <br>
        <h4 class=" fw-bold lh-1 mb-3">What Will You Learn:</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper egestas pharetra enim vel adipiscing sagittis, amet porttitor donec. Congue ac varius lorem eleifend pellentesque et. Massa in mattis risus augue risus amet ut consectetur volutpat. Aliquet nec posuere a duis tortor dui eget sed sem.</p>
        
      </div>
    </div>
  </div>

<!-- two cards -->
<div class="row pt-5">
<div class="col-md-3">
<div class="card border-primary mb-3">
  <div class="card-header" style="color: #00B57F; font-size:20px;">Estimated Time</div>
  <div class="card-body" style="color: #000000;">
    <h5 class="card-title fw-bold">3 Months</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

<div class="col-md-3">
<div class="card border-primary mb-3">
  <div class="card-header" style="color: #00B57F; font-size:20px;">Prerequisites</div>
  <div class="card-body" style="color: #000000;">
    <h5 class="card-title fw-bold">Basic HTML, CSS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>


<!-- Price & buy now btn -->
<div class="col-4 offset-md-1">
    <h5 class="card-title fw-bold">Price: RM 399.00</h5>
    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Buy Now</button><br><br>
    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Add To Wishlist</button> 
</div>

</div>

<!-- Instructor info -->
<div class="container">
    <div class="row flex-lg-row-reverse align-items-center g-5 pt-5  offset-md-1">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{url('/img/i1.png')}}" class="d-block mx-lg-auto img-fluid rounded-circle" alt="Bootstrap Themes" width="300" height="300" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h3>Instructor: </h3><h3 class=" fw-bold lh-1 mb-3"><a href="/ins_info">George Wilson</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper egestas pharetra enim vel adipiscing sagittis, amet porttitor donec. Congue ac varius lorem eleifend pellentesque et. Massa in mattis risus augue risus amet ut consectetur volutpat. </p>
        <br>
       
        <h5>Specialisms: </h5> <p>Web Development, Graphic Design</p>
        <button onclick="window.location.href='/ins_info';" type="button" class="btn btn-outline-secondary btn-lg px-4">Learn More About This Instructor</button> 

    </div>
    </div>
  </div>


<!--syllabus-->
<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-6">
			<h3 class="pb-2">Syllabus</h3>
			<ul class="timeline">
				<li>
					<h5>Introduction to Web Design</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
				</li>
				<li>
                    <h5>Create Your First Project</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
				</li>
				<li>
                    <h5>Design Wireframe</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
				</li>
			</ul>
            <h5>And More...</h5>
		</div>
	</div>
</div>


</div>
</div>

@endsection

