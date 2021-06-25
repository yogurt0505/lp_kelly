@extends('layouts.student_master')

@section('content')

<div class="content">
  <div class="container">

    <!-- Main Title  -->

    <div class="row align-items-center g-5 py-5">
      <div class="col-lg-6 pt-4">
        <br>
        <h1 class="lh-1 ">Welcome Back,</h1>
        <h1 class="fw-bold lh-1 " style="color:#00B57F">Ashley Kennedy</h1>
      </div>
    </div>

    <!-- title: Ready for your next lesson -->
    <div class="pb-4">
      <h3 class="section-heading font-weight-bold pt-3">Ready for your next lesson</h3>
      <div class="col-md-3" style="border-bottom: 2px solid #00B57F"></div>
    </div>


    <!--lesson cards -->
    <div class="row">
      <div class="col-lg-6 flex-lg-row-reverse">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="{{url('/img/background3.jpg')}}" alt="..." class="card-image img-fluid img-cover">
            </div>
            <div class="col-md-7">
              <div class="col p-3 d-flex flex-column position-static">
                <p class="d-inline-block mb-1 text-muted">Lesson 2 of 13</p>
                <p>
                <h3 class="mb-0">Create New Laravel Project</h3>30 mins</p>
                <div class="mb-0 text-muted">Course:</div>
                <p class="mb-3 fw-bold">Web Development</p>
                <p><a href="{{url('student/lesson_view')}}" class="stretched-link">Continue &nbsp</a><i class="bi bi-arrow-right-circle" style="color:#00B5F7"></i></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 flex-lg-row-reverse">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="{{url('/img/Top-tools-for-mobile-game-development-that-you-should-use.jpg')}}" alt="..." class="card-image img-fluid img-cover">
            </div>
            <div class="col-md-7">
              <div class="col p-3 d-flex flex-column position-static">
                <p class="d-inline-block mb-1 text-muted">Lesson 6 of 11</p>
                <p>
                <h3 class="mb-0">Render 3D Objects in Blender</h3>45 mins</p>
                <div class="mb-0 text-muted">Course:</div>
                <p class="mb-3 fw-bold">Game Development</p>
                <p><a href="{{url('student/lesson_view')}}" class="stretched-link">Continue &nbsp</a><i class="bi bi-arrow-right-circle" style="color:#00B5F7"></i></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- title:Progress Overview -->
    <div class="pb-4">
      <h3 class="section-heading font-weight-bold pt-5">Progress Overview</h3>
      <div class="col-md-3" style="border-bottom: 2px solid #00B57F"></div>
    </div>

    <!-- progress table-->
    <div class="row">
      <h5><i class="bi bi-clock" style="color:#00B5F7;"></i>&nbsp Ongoing Course</h5>
    </div>
    <div class="row pb-4 pt-1">
      <h5><i class="bi bi-check-circle" style="color:#00B57F;"></i>&nbsp Completed Course</h5>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Courses</th>
          <th scope="col">Status</th>
          <th scope="col">Progress</th>
          <th scope="col">Pages</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Web Development</th>
          <td><i class="bi bi-clock" style="color:#00B5F7; font-size: 22px"></i></td>
          <td>
            <div class="progress">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>7 out of 11
          </td>
          <td><a class="fw-bold" href="{{url('student/lesson_view')}}">Lesson Page</a>&nbsp &nbsp &nbsp <a class="fw-bold" href="/course_detail">Course Detail</a></td>
        </tr>
        <tr>
          <th scope="row">UI/UX Design</th>
          <td><i class="bi bi-clock" style="color:#00B5F7;font-size: 22px"></i></td>
          <td>
            <div class="progress">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>6 out of 12
          </td>
          <td><a class="fw-bold" href="{{url('student/lesson_view')}}">Lesson Page</a>&nbsp &nbsp &nbsp <a class="fw-bold" href="/course_detail">Course Detail</a></td>
        </tr>
        <tr>
          <th scope="row">Data Science</th>
          <td>
            <h4><i class="bi bi-check-circle" style="color:#00B57F ;font-size: 22px"></i>
          </td>
          <td>
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>9 out of 9
          </td>
          <td><a class="fw-bold" href="{{url('student/lesson_view')}}">Lesson Page</a>&nbsp &nbsp &nbsp <a class="fw-bold"href="/course_detail">Course Detail</a>
  </div>
  </td>
  </tr>
  </tbody>
  </table>




</div>
</div>
@endsection