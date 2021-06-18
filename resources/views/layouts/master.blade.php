
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Learning Platform</title>



<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" 
crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">


<!-----Font---->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background-color: #00B57F;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">
    <img src="{{url('/icon/logic.svg')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
    Learning Platform
    </a>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/all_course">Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <form class="container-fluid justify-content-start">
           <button class="btn btn-primary me-2" type="button">Get Started</button>
         </form>
      </ul>   
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Type anything..." aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!--main content -->
<main>
    <div class="container">
        @yield('content')
    </div>
</main>


<!-- Footer -->
<footer class=" text-lg-start bg-light text-muted">

  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
  </section>

    <div class="container  text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
          <!-- Content -->
          <h5 class="text-uppercase fw-bold mb-4">
            Learning Platform
          </h5>
          <p>
            <a href="#!" class="text-reset">About</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Courses Page</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Become Instructor</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contact Us</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4">
            Popular Courses
          </h5>
          <p>
            <a href="#!" class="text-reset">Web Development</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Graphic Design</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Animations</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Data Science</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Video Editing</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4">
            New Updates
          </h5>
          <p>
            <a href="#!" class="text-reset">Laravel with React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Artificial Intelligence</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Intro to Blender</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Cybersecurity</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Adobe Premiere Pro</a>
          </p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->
    </div>


  <!-- Copyright --> 
  <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <h6 class="col-lg-4 text-lg-left">Copyright &#169 Bright Approach 2021</h6>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-primary mx-2" style="border-radius: 20px;" href="#!"><i class="bi bi-facebook"></i></a>
                        <a class="btn btn-primary mx-2" style="border-radius: 20px;" href="#!"><i class="bi bi-twitter"></i></a>
                        <a class="btn btn-primary mx-2" style="border-radius: 20px;" href="#!"><i class="bi bi-linkedin"></i></a>
                        <a class="btn btn-primary mx-2" style="border-radius: 20px;" href="#!"><i class="bi bi-instagram"></i></a>
                      </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3 fontcolor" href="#!">Privacy Policy</a>
                        <a class="fontcolor" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
  
  </section>

</footer>
<!-- Footer -->

<!-- javascript-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
crossorigin="anonymous"></script>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" 
integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" 
crossorigin="anonymous"></script>


</body>
</html>