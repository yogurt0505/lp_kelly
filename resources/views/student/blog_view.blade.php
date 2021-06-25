@extends('layouts.student_master')

@section('content')

<div class="content">
    <div class="container">

        <!-- Main Title & blog info -->

        <div class="row align-items-center g-5 py-5">
            <div class="col-lg-6 pt-4">
                <br><i class="bi bi-tags" style="color:#00B57F; font-size:14px;">&nbsp</i>
                <a href="" class="fw-bold" style="font-size:16px;">Game</a> &nbsp <a href="" class="fw-bold" style="font-size:16px;">3D Object</a></h5>
                <h1 class="fw-bold lh-1">Tips to Master Blender</h1>
                <div class="pt-2">by &nbsp<a href="">George Wilson</a></div>
                <div class="text-muted pt-1" style="font-size:14px;">Published in 2021-05-21, Last updated at 2021-06-08</div>
            </div>
        </div>

        <!--cover img-->
        <div class="row text-center col-md-8 offset-md-2">
            <figure class="figure">
                <img src="{{url('/img/jibran-khan-3d-model-of-work.jpg')}}" class="img-fluid mx-auto d-block">
                <figcaption class="figure-caption pt-1">A caption for the above image.</figcaption>
            </figure>
        </div>

        <!--blog content-->
        <div class="col-md-10 offset-md-1 pt-2">
            <p class="blog">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Convallis elementum blandit dui feugiat rhoncus erat convallis. Non orci urna dolor ut. Enim, maecenas non dui habitant nullam enim. Pretium maecenas platea malesuada volutpat vulputate maecenas. Dictumst sem potenti in mattis tempor, urna felis in ultrices. Pellentesque nibh leo, pretium scelerisque diam. Ipsum posuere curabitur sed a dui pellentesque orci. Volutpat tincidunt turpis eu sit cras condimentum adipiscing. Enim interdum vitae commodo est habitant dolor neque, varius. Ultrices elementum quis viverra tincidunt sed mattis. Ultrices ut mattis feugiat volutpat maecenas adipiscing. A in iaculis sed varius a porttitor quam.
                <br>
                </br>
                Amet vivamus auctor lorem imperdiet. Massa consectetur commodo lorem proin aenean justo dictum malesuada vitae. At gravida suspendisse eget eu donec at at quis. Nisi integer e, lectus varius gravida quis senectus. Maecenas tortor lectus sem etiam mattis. Arcu at diam elementum pulvinar consectetur non dignissim etiam adipiscing. Et, hac morbi viverra faucibus augue habitant. Ullamcorper rutrum arcu id faucibus. Risus in massa cras sem ullamcorper nam ut eget pellentesque. Viverra egestas sed sit magnis ullamcorper pharetra. Vitae fames nunc, ipsum lectus ultricies ipsum dignissim donec.
                <br></br>Tellus sed adipiscing nisl volutpat adipiscing pellentesque elementum in. Condimentum phasellus cras cras a, sit amet, integer in. Rutrum libero dignissim nulla proin vitae rutrum imperdiet id ut. Diam laoreet sit quam cras massa, elementum ut. Amet blandit nunc enim ut proin natoque ullamcorper.
            </p>
        </div>

    </div>
</div>
@endsection