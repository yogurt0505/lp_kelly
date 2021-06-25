@extends('layouts.student_master')

@section('content')

<div class="content">
  <div class="container">

    <!-- Main Title  -->

    <div class="row align-items-center g-5 py-5">
      <div class="col-lg-6 pt-4">
        <br>
        <h5 class="lh-1 text-muted">Lesson 5/11</h5>
        <h1 class="fw-bold lh-1">Introduction to PHP</h1>
      </div>
    </div>

    <!-- video -->
    <div class="row">
      <div class="col-md-9">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><video src="" controls></video></div>
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><video src="" controls></video></div>
          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"><video src="" controls></video></div>
          <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><video src="" controls></video></div>
        </div>
      </div>

      <!-- Lesson List-->
      <div class="col-md-3">
        <div class="list-group" style="overflow:auto; height:400px;" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Introduction to PHP</div>
              <div style="font-size: 12px;">8 minutes</div>
            </div>
          </a>

          <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Introduction to PHP</div>
              <div style="font-size: 12px;">8 minutes</div>
            </div>
          </a>

          <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Introduction to PHP</div>
              <div style="font-size: 12px;">8 minutes</div>
            </div>
          </a>

          <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Introduction to PHP</div>
              <div style="font-size: 12px;">8 minutes</div>
            </div>
          </a>

          <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Introduction to PHP</div>
              <div style="font-size: 12px;">8 minutes</div>
            </div>
          </a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Introduction to PHP</div>
              <div style="font-size: 12px;">8 minutes</div>
            </div>
          </a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Introduction to PHP</div>
              <div style="font-size: 12px;">8 minutes</div>
            </div>
          </a>
        </div>
      </div>

    </div>

    <!--desc & comments tab -->
    <section id="tabs" class="project-tab">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav>
              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active col-md-2" id="description-tab" data-toggle="tab" href="#desc-tab" role="tab" aria-controls="desc-tab" aria-selected="true">Description</a>
                <a class="nav-item nav-link col-md-2" id="comment-tab" data-toggle="tab" href="#com-tab" role="tab" aria-controls="com-tab" aria-selected="false">Comments</a>

              </div>
            </nav>
            <div class="tab-content pt-3" id="nav-tabContent">
              <!--desc-->
              <div class="tab-pane fade show active" id="desc-tab" role="tabpanel" aria-labelledby="description-tab">
                <div class="row">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....
                </div>
              </div>
              <!--comment-->
              <div class="tab-pane fade" id="com-tab" role="tabpanel" aria-labelledby="comment-tab">
                <div class="container">
                  <div class="row">
                    <div class="col-md-1 col-sm-2 col-lg-1">
                      <img src="{{url('/img/img_avatar.png')}}" class="d-block mx-lg-auto img-fluid rounded-circle" width="65" height="65" loading="lazy">
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Write your comment here...</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-primary">Post</button><br><br>
                    </div>
                  </div>

                  <div class="row pt-4">
                    <div class="col-md-1 col-sm-2 col-lg-1">
                      <img src="{{url('/img/img_avatar2.png')}}" class="d-block mx-lg-auto img-fluid rounded-circle" width="65" height="65" loading="lazy">
                    </div>
                    <div class="col-md-8">
                      <div class="fw-bold">Ashley Kennedy</div>
                      <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquet libero, diam enim non urna, risus vestibulum, malesuada. Neque, diam arcu enim tristique est est enim nec. Enim dictum fermentum ut sagittis pretium id congue.</div>
                      <div class="text-muted" style="font-size:12px;">Posted 2 hours ago &nbsp &nbsp <a href="">Reply</a></div>
                    </div>
                  </div>

                  <div class="offset-md-1">
                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                      See Reply
                    </button>
                  </div>
                  <div class="collapse" id="collapseExample">

                    <div class="row pt-4 offset-md-1">
                      <div class="col-md-1 col-sm-2 col-lg-1">
                        <a href="/ins_info"><img src="{{url('/img/i1.png')}}" class="d-block mx-lg-auto img-fluid rounded-circle" width="65" height="65" loading="lazy"></a>
                      </div>
                      <div class="col-md-8">
                        <div class="fw-bold">George Wilson</div>
                        <div><a href="">@Ashley Kennedy &nbsp</a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquet libero, diam enim non urna, risus vestibulum, malesuada. Neque, diam arcu enim tristique est est enim nec. Enim dictum fermentum ut sagittis pretium id congue.</div>
                        <div class="text-muted" style="font-size:12px;">Posted 2 hours ago &nbsp &nbsp <a href="">Reply</a></div>
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