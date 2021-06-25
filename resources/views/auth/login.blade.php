@extends('layouts.auth')

@section('content')
<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-10 offset-md-1 justify-content-center">

                <div class="row">
                    <div class="col-md-3">
                        <img src="{{url('/img/01.jpg')}}" alt="..." class="card-image img-fluid img-cover">
                    </div>
                    <div class="col-md-7"  style="box-shadow:5px 5px 10px #888888;">
                        <div class="p-4 p-lg-5">
                            <div class="w-100">
                                <h2 class="mb-4 text-uppercase text-center fw-bold" style="color:#00B57F;">Login to Learning Platform</h2>
                            </div>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
                                </div>
                                <div class="form-group row d-md-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                              
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
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
@endsection