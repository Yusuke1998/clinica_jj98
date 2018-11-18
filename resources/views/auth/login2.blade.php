@extends('templates.dashboard-layout')
@section('content')


<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
<div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
      <h2 class="text-center">Inicia Secion</h2>
      {{-- <form > --}}
<form method="POST" class="login-form" action="{{ route('login') }}">
      @csrf


  <div class="form-group">
    <label for="email" class="text-uppercase">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
  </div>

  <div class="form-group">
    <label for="password" class="text-uppercase">{{ __('Password') }}</label>
      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
      @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
  </div>

  <div class="form-group row">
      <div class="col-md-12">
          <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

              <label class="form-check-label" for="remember">
                  <small>{{ __('Remember Me') }}</small>
              </label>
          </div>
      </div>
      <div class="col-md-12">
        <button type="submit" class="form-control btn btn-primary">
            {{ __('Login') }}
        </button>
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
      </div>
  </div>

  <div class="form-group row mb-0">
  </div>
  
</form>
{{-- Carrusel --}}
<div class="copy-text"></div>
    </div>
    <div class="col-md-8 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="{{asset('img/nurse.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              {{-- <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
              </div>  --}} 
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{asset('img/nurse1.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              {{-- <div class="banner-text">
                  <h2>This is Heaven</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
              </div> --}}  
            </div>
          </div>
          <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('img/nurse2.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                 {{--  <div class="banner-text">
                      <h2>This is Heaven</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                  </div> --}}  
                </div>
          </div>
        </div>     
    </div>
  </div>
</div>
</div>


</section>
@endsection