@extends('layouts.master')

@section('content')

<div class="content">
  <div class="container">

    <!-- Main Title & logo -->
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-5 py-5">
        <div class="col-lg-6">
          <h1 class="fw-bold lh-1 mb-3">All Courses</h1>
          <p class="lead">We have:</p>
        </div>
      </div>
    </div>

    <!-- Image-->
    <div class="text-center">
      <img src="{{url('/img/allcourse.png')}}" class="img-fluid mx-auto d-block">
    </div>

    <!-- title: Explore our courses -->
    <div class="text-center pt-5 pb-4">
      <h3 class="section-heading font-weight-bold pt-3">Most Popular Courses</h3>
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
          <!--s-->
          <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <div class="row">

                      <div class="col-lg-4">
                        <div class="card mb-3">
                          <div class="row g-0">
                            <div class="col-md-5">
                              <img src="{{url('/img/background7.jpg')}}" alt="..." class="card-image img-fluid img-cover">
                            </div>
                            <div class="col-md-7">
                              <div class="card-body">
                                <a href="/course_detail">
                                  <h4 class="card-title">PHP</h4>
                                </a>
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
        <ul class="pagination justify-content-center">

          <li class="page-item"><a class="page-link" href="#carouselExampleIndicators2" role="button" data-slide-to="0">1</a></li>
          <li class="page-item"><a class="page-link" href="#carouselExampleIndicators2" role="button" data-slide-to="1">2</a></li>
          <li class="page-item"><a class="page-link" href="#carouselExampleIndicators2" role="button" data-slide-to="2">3</a></li>

        </ul>
      </nav>

      <!-- title: Explore our courses -->
      <div class="text-center pt-5 pb-4">
        <h3 class="section-heading font-weight-bold pt-3">Explore Through Categories</h3>
      </div>

      <!--courses with categories-->
      <section id="tabs" class="project-tab">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active col-md-2" id="nav-game-tab" data-toggle="tab" href="#nav-game" role="tab" aria-controls="nav-game" aria-selected="true">Game Development</a>
                  <a class="nav-item nav-link col-md-2" id="nav-web-tab" data-toggle="tab" href="#nav-web" role="tab" aria-controls="nav-web" aria-selected="false">Web Development</a>
                  <a class="nav-item nav-link col-md-2" id="nav-3-tab" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">Animation</a>
                  <a class="nav-item nav-link col-md-2" id="nav-4-tab" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">Graphic Design</a>
                  <a class="nav-item nav-link col-md-2" id="nav-5-tab" data-toggle="tab" href="#nav-5" role="tab" aria-controls="nav-5" aria-selected="false">Data Science</a>
                  <a class="nav-item nav-link col-md-2" id="nav-6-tab" data-toggle="tab" href="#nav-6" role="tab" aria-controls="nav-6" aria-selected="false">Business</a>
                  <a class="nav-item nav-link col-md-2" id="nav-7-tab" data-toggle="tab" href="#nav-7" role="tab" aria-controls="nav-7" aria-selected="false">Video Editing</a>
                  <a class="nav-item nav-link col-md-2" id="nav-8-tab" data-toggle="tab" href="#nav-8" role="tab" aria-controls="nav-8" aria-selected="false">Photography</a>
                  <a class="nav-item nav-link col-md-2" id="nav-9-tab" data-toggle="tab" href="#nav-9" role="tab" aria-controls="nav-9" aria-selected="false">Mobile App</a>

                </div>
              </nav>
              <div class="tab-content pt-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-game" role="tabpanel" aria-labelledby="nav-game-tab">
                  <div class="row">
                    <div class="col-md-4">
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
                    <div class="col-md-4">
                      <div class="card mb-3 ">
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
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-web" role="tabpanel" aria-labelledby="nav-web-tab">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card mb-3 ">
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
                    <div class="col-md-4">
                      <div class="card mb-3 ">
                        <div class="row g-0">
                          <div class="col-md-5">
                            <img src="{{url('/img/background3.jpg')}}" alt="..." class="card-image img-fluid img-cover">
                          </div>
                          <div class="col-md-7">
                            <div class="card-body">
                              <h4 class="card-title">CSS</h4>
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
      </section>


    </div>
  </div>
  @endsection