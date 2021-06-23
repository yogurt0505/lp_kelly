@extends('layouts.master')

@section('content')
<div class="content">
  <div class="container">

  <!-- Main Title  -->
 
    <div class="row align-items-center g-5 py-5">
      <div class="col-lg-6 pt-4">
          <br>
        <h1 class="fw-bold lh-1 ">Instructor Profile</h1>
        
      </div>
    </div>

<!-- Instructor info -->
<div class="container">
    <div class="row align-items-center g-5 pt-5">
      <div class="col-10 col-sm-8 col-lg-5">
        <img src="{{url('/img/i1.png')}}" class="d-block mx-lg-auto img-fluid rounded-circle" alt="Bootstrap Themes" width="250" height="250" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h2 class=" fw-bold lh-1 mb-3">George Wilson</h2>
        <h5>Specialisms: </h5> <p>Web Development, Graphic Design</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper egestas pharetra enim vel adipiscing sagittis, amet porttitor donec. Congue ac varius lorem eleifend pellentesque et. Massa in mattis risus augue risus amet ut consectetur volutpat. </p>

    </div>
    </div>
  </div>

  <!-- title: contact -->
<div class="text-center pt-5 pb-2">
  <h3 class="section-heading font-weight-bold pt-3">Contact</h3>
   </div>

  <!--contact info -->
  <<div class="row text-center pt-2">
                <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                        <i class="bi bi-envelope-fill" style="font-size: 2rem; color:#00B57F;"></i>
                     <h4 class="my-2">E-mail</h4>
                    </span>
                        <p class="text-muted">wilson@gmail.com</p>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                        <i class="bi bi-telephone-fill" style="font-size: 2rem; color:#00B57F;"></i>
                      </span>
                        <h4 class="my-2">Phone Number</h4>
                        <p class="text-muted">+60123456789</p>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                        <i class="bi bi-linkedin" style="font-size: 2rem; color:#00B57F;"></i>
                       </span>
                        <h4 class="my-2">LinkedIn</h4>
                        <p class="text-muted">https://www.linkedin.com/in/wilson123/</p>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                        <i class="bi bi-twitter" style="font-size: 2rem; color:#00B57F;"></i>
                       </span>
                        <h4 class="my-2">Twitter</h4>
                        <p class="text-muted">@wilson123</p>
                    </div>
                </div>
            </div>


<!-- title: Courses Published -->
<div class="text-center pt-5">
  <h3 class="section-heading font-weight-bold pt-3">Courses Published</h3>
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
  <ul class="pagination justify-content-center">
  
    <li class="page-item"><a class="page-link" href="#carouselExampleIndicators2" role="button" data-slide-to="0">1</a></li>
    <li class="page-item"><a class="page-link" href="#carouselExampleIndicators2" role="button" data-slide-to="1">2</a></li>
    <li class="page-item"><a class="page-link" href="#carouselExampleIndicators2" role="button" data-slide-to="2">3</a></li>
    
  </ul>
</nav>


  <!-- title: contact -->
  <div class="text-center pt-5 pb-5">
  <h3 class="section-heading font-weight-bold pt-3">Blog Space</h3>
   </div>

   <!-- Blog space -->
   <div class="row">
 <div class="col-md-6 flex-lg-row-reverse">
<div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-5">
      <img src="{{url('/img/background3.jpg')}}" alt="..." class="card-image img-fluid img-cover">
    </div>
    <div class="col-md-7">
    <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Future, Career</strong>
          <h3 class="mb-0">Simple Carrer Test For You</h3>
          <div class="mb-1 text-muted">May 21 2021</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <p><a href="student/blog_view" class="stretched-link">Continue reading &nbsp</a><i class="bi bi-arrow-right-circle" style="color:#00B5F7"></i></p>
        </div>
    </div>
  </div>
</div>
</div>


 <div class="col-md-6 flex-lg-row-reverse">
<div class="card mb-3 " >
  <div class="row g-0">
    <div class="col-md-5">
      <img src="{{url('/img/Top-tools-for-mobile-game-development-that-you-should-use.jpg')}}" alt="..." class="card-image img-fluid img-cover">
    </div>
    <div class="col-md-7">
    <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Game, 3D Object</strong>
          <h3 class="mb-0">Tips to Master Blender</h3>
          <div class="mb-1 text-muted">Nov 11 2020</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <p><a href="student/blog_view" class="stretched-link">Continue reading &nbsp</a><i class="bi bi-arrow-right-circle" style="color:#00B5F7"></i></p>
        </div>
    </div>
  </div>
</div>
</div>
</div>

    </div>
</div>

@endsection

