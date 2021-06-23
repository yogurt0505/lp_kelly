@extends('layouts.master')

@section('content')

<div class="content">
  <div class="container">

  <!-- Main Title & logo -->
  <div class="container col-xxl-8 px-4 py-5 pb-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{url('/img/home.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-4 fw-bold lh-1 mb-3">Start Your Learning Journey Now</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper egestas pharetra enim vel adipiscing sagittis, amet porttitor donec. Congue ac varius lorem eleifend pellentesque et. Massa in mattis risus augue risus amet ut consectetur volutpat. Aliquet nec posuere a duis tortor dui eget sed sem.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" onclick="window.location.href='/become_ins';" class="btn btn-primary btn-lg px-4 me-md-2">Get Started</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Login</button>
        </div>
      </div>
    </div>
  </div>

  <!-- title: Explore our courses -->
  <div class="text-center pb-4">
  <h3 class="section-heading font-weight-bold pt-3">Explore Our Courses</h3>
   </div>


   <!-- courses cards carousel -->
   <div class="pt-2 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
               
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <!--s--><div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
              
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <div class="row">

<div class="col-lg-4">
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-5 ">
      <img src="{{url('/img/background7.jpg')}}" alt="..." class="card-image img-fluid img-cover">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h4 class="card-title">PHP</h4>
        <p class="card-text"><small class="text-muted">RM 499.00</small></p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-lg-4">
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-5">
      <img src="{{url('/img/Optimized-Illustration-from-Adobe-Stock-for-ITC-Post-on-AI-in-Game-Development-scaled.jpeg')}}" alt="..." class="card-image img-fluid img-cover">
    </div>
    <div class="col-md-7">
      <div class="card-body">
      <h4 class="card-title">Unity</h4>
        <p class="card-text"><small class="text-muted">RM 599.00</small></p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-lg-4">
<div class="card mb-3">
  <div class="row g-0 ">
    <div class="col-md-5">
      <img src="{{url('/img/1_qKcHOdj97r4LBbqLP-7-kA-_1_.png')}}" alt="..." class="card-image img-fluid img-cover">
    </div>
    <div class="col-md-7">
      <div class="card-body">
      <h4 class="card-title">Blender</h4>
        <p class="card-text"><small class="text-muted">RM 499.00</small></p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

 <div class="col-lg-4">
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-5">
      <img src="{{url('/img/1_qKcHOdj97r4LBbqLP-7-kA-_1_.png')}}" alt="..." class="card-image img-fluid img-cover">
    </div>
    <div class="col-md-7">
      <div class="card-body">
      <h4 class="card-title">Blender</h4>
        <p class="card-text"><small class="text-muted">RM 499.00</small></p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-lg-4">
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-5">
      <img src="{{url('/img/background7.jpg')}}" alt="..." class="card-image img-fluid img-cover">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h4 class="card-title">PHP</h4>
        <p class="card-text"><small class="text-muted">RM 499.00</small></p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-lg-4">
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-5">
      <img src="{{url('/img/Optimized-Illustration-from-Adobe-Stock-for-ITC-Post-on-AI-in-Game-Development-scaled.jpeg')}}" alt="..." class="card-image img-fluid img-cover">
    </div>
    <div class="col-md-7">
      <div class="card-body">
      <h4 class="card-title">Unity</h4>
        <p class="card-text"><small class="text-muted">RM 599.00</small></p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                            <div class="col-md-4">
<div class="card lg-3">
  <div class="row g-0">
    <div class="col-md-5">
      <img src="{{url('/img/Optimized-Illustration-from-Adobe-Stock-for-ITC-Post-on-AI-in-Game-Development-scaled.jpeg')}}" alt="..." class="card-image img-fluid img-cover">
    </div>
    <div class="col-md-7">
      <div class="card-body">
      <h4 class="card-title">Unity</h4>
        <p class="card-text"><small class="text-muted">RM 599.00</small></p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-lg-4">
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-5">
      <img src="{{url('/img/1_qKcHOdj97r4LBbqLP-7-kA-_1_.png')}}" alt="..." class="card-image img-fluid img-cover">
    </div>
    <div class="col-md-7">
      <div class="card-body">
      <h4 class="card-title">Blender</h4>
        <p class="card-text"><small class="text-muted">RM 499.00</small></p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-lg-4">
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-5">
      <img src="{{url('/img/background7.jpg')}}" alt="..." class="card-image img-fluid img-cover">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h4 class="card-title">PHP</h4>
        <p class="card-text"><small class="text-muted">RM 499.00</small></p>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- pagination -->
    <nav aria-label="Page navigation example">
  <div class="pagination_circle justify-content-center">
  
    <div class="pagination_circle__dot pagination_circle__dot--active" href="#carouselExampleIndicators2" data-bs-slide-to="0" aria-selected="true" aria-label="Slide 1" role="button" data-slide-to="0"></div>
    <div class="pagination_circle__dot"href="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2" role="button" aria-selected="false" data-slide-to="1"></div>
    <div class="pagination_circle__dot" href="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3" role="button" aria-selected="false"data-slide-to="2"></div>
    
</div>
</nav>

 <!-- title: Students from Company -->
 <div class="text-center pt-5 pb-1">
  <h3 class="section-heading font-weight-bold pt-3">Students From Companies</h3>
   </div>
</div>
 
<!-- Company Logo-->
<div class="row">
<div class="col-3">
<img src="{{url('/img/google-logo.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="180" height="180" loading="lazy">
     </div>
<div class="col-3">
<img src="{{url('/img/intel-logo.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="180" height="180" loading="lazy">
 </div>
<div class="col-3">
<img src="{{url('/img/nVidia-Company-Logo.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="180" height="180" loading="lazy">
 </div>
 <div class="col-3">
<img src="{{url('/img/microsoft-logo.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="180" height="180" loading="lazy">
 </div>
</div>

<!-- Heading: -->
<div class="text-center pt-4">
  <h3 class="section-heading font-weight-bold pt-3">Achieve Your Goals with Us</h3>
   </div>


 <!-- About us-->         
            <div class="row text-center pt-5">
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                        <i class="bi bi-journal-richtext" style="font-size: 5rem; color:#00B57F;"></i>
                      </span>
                        <h4 class="my-3">Get ready for a career</h4>
                        <p class="text-muted">Preparing yourself in high-demand fields like Information Technology, Artificial intelligence and cloud engineering.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                        <i class="bi bi-person-check" style="font-size: 5rem; color:#00B57F;"></i>
                      </span>
                        <h4 class="my-3">Get ready for a career</h4>
                        <p class="text-muted">Preparing yourself in high-demand fields like Information Technology, Artificial intelligence and cloud engineering.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                        <i class="bi bi-award" style="font-size: 5rem; color:#00B57F;"></i>
                       </span>
                        <h4 class="my-3">Personalized learning</h4>
                        <p class="text-muted">Students practice at their own pace, first filling in gaps in their understanding and then accelerating their learning.</p>
                    </div>
                </div>
            </div>
      



</div>
@endsection

<?php


?>


