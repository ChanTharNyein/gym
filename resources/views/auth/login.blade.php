@extends('template')

@section('content')
<section class="banner-area relative" id="home" style="background-image: url({{asset('./img/home3.jpg')}});">   
    <div class="overlay overlay-bg"></div>
    <div class="container">             
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Login Page               
                </h1>   
                <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Login </a></p>
            </div>  
        </div>
    </div>
</section>

<div class="container-fluid" style="background-color: #e8e6eb;">
    <div class="row justify-content-center pt-5 pb-5">
        <div class="col-lg-4 col-md-5 col-sm-12 pt-5 pb-2">
            <div class="card">
                <div class="card-header text-center mt-1">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-lg-4 emaillabel text-left">{{ __('E-Mail :') }}</label>

                            <div class="col-lg-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-lg-4 passwordlabel text-left">{{ __('Password :') }}</label>

                            <div class="col-lg-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-5 pl-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label remember" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <!-- <div class="col-lg-7">
                                <div class="form-check">
                                    @if (Route::has('password.request'))
                                        <a class=" forgotlink" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div> -->
                        </div>

                        <div class="row justify-content-center">
                            <div class="">
                                <button type="submit" class="loginbtn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Style -->
<style>
    .card{
        background-color: #121212;
        border-radius: 10px;
    }
    .card input{       
        border: 1px solid #777777;
        border-radius: 20px;
        background-color: transparent;
        padding-left: 10px;
    }
    .card-header{
        font-size: 18px;
        text-transform: uppercase;
        color:#fff;
    }
    label{
        color:#fff;
    }
    .emaillabel,.passwordlabel{
        padding-top: 5px;
    }
    .card input:focus{
        background-color: transparent;
    }
    .forgotlink,.remember{
        color:#fff;
        font-size: 12px;
        font-family: 'Poppins';
    }
    .loginbtn{
        border-color: #fff;
        background-color: transparent;
        color: #fff;
        font-size: 16px;
        padding: 5px 20px;
        border-radius: 0;
        box-shadow: none;
    }
    .loginbtn:hover{
        border-radius: 10px;
        transition-duration: 0.2s;
        background-color: transparent;
        color:#fff;
        transition:0.3s;
    }
    
</style>
<!-- End of Style -->

@endsection