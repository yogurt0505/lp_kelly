@extends('layouts.master')

@section('content')
<div class="content">
  <div class="container">

    <!-- Main Title  -->

    <div class="row align-items-center g-5 py-5">

      <div class="col-lg-6 pt-4">
        <br>
        <h1 class="fw-bold lh-1 ">Become Instructor</h1>

      </div>
    </div>

    <!-- Banner -->

    <div class="container">
      <div class="row" style="background:transparent url('img/teacher-job-description-1024x576.jpg')  center center /cover">

        <div class="text-center col-4 offset-md-4 align-self-center" style="background-color:#fff;">
          <h2>JOIN US NOW TO BECOME VERIFIED INSTRUCTOR</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur risus, vitae odio nullam tortor. Pellentesque a elementum sed facilisi elementum blandit mauris mattis. </p>
          <button type="button" onclick="window.location.href='/reg_ins';" class="btn btn-primary btn-lg px-4 me-md-2">Get Started</button>

        </div>
      </div>
    </div>

    <!-- title: Benefits  -->

    <div class="text-center pt-5 pb-2">
      <h3 class="section-heading font-weight-bold pt-3">Benefits</h3>
    </div>


    <!-- Benefits -->
    <div class="row text-center pt-5">
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="bi bi-hdd-rack" style="font-size: 5rem; color:#00B57F;"></i>
        </span>
        <h4 class="my-3">Share Your Knowledge</h4>
        <p class="text-muted">Preparing yourself in high-demand fields like Information Technology, Artificial intelligence and cloud engineering.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="bi bi-cash-stack" style="font-size: 5rem; color:#00B57F;"></i>
        </span>
        <h4 class="my-3">Earn Considerable income</h4>
        <p class="text-muted">Preparing yourself in high-demand fields like Information Technology, Artificial intelligence and cloud engineering.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="bi bi-clipboard-data" style="font-size: 5rem; color:#00B57F;"></i>
        </span>
        <h4 class="my-3">Organized interface</h4>
        <p class="text-muted">Students practice at their own pace, first filling in gaps in their understanding and then accelerating their learning.</p>
      </div>
    </div>
  </div>


  <!-- Instructor quote -->
  <div class="container">
    <div class="row flex-lg-row-reverse align-items-center g-5 pt-5  offset-md-1">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{url('/img/i1.png')}}" class="d-block mx-lg-auto img-fluid rounded-circle" alt="Bootstrap Themes" width="300" height="300" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h3 class=" fw-bold lh-1 mb-3">George Wilson</h3>
        <h5>Web Developer, Graphic Designer</h5>
        <br>
        <i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper egestas pharetra enim vel adipiscing sagittis, amet porttitor donec. Congue ac varius lorem eleifend pellentesque et. Massa in mattis risus augue risus amet ut consectetur volutpat." </i>
        <br>
        <br>
        <button onclick="window.location.href='/ins_info';" type="button" class="btn btn-outline-secondary btn-lg px-4">Learn More About This Instructor</button>

      </div>
    </div>
  </div>


</div>
</div>
@endsection