@extends('template')

@section('content')
<section class="banner-area relative" id="home" style="background-image: url({{asset('./img/home3.jpg')}});">   
    <div class="overlay overlay-bg"></div>
    <div class="container">             
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Register Page               
                </h1>   
                <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Register </a></p>
            </div>  
        </div>
    </div>
</section>
<div class="container-fluid" style="background-color: #e8e6eb;">
    <div class="row justify-content-center pt-5 pb-5">
        <div class="col-lg-6 col-md-7 col-sm-12 pt-5 pb-2">
            <div class="card">
                <div class="card-header text-center mt-1">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-lg-4 text-left namelabel">{{ __('Name :') }}</label>

                            <div class="col-lg-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-lg-4 text-left emaillabel">{{ __('E-Mail :') }}</label>

                            <div class="col-lg-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-lg-4 text-left passwordlabel">{{ __('Password :') }}</label>

                            <div class="col-lg-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-lg-4 text-left confirmlabel">{{ __('Confirm Password :') }}</label>

                            <div class="col-lg-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="">
                                <button type="submit" class="registerbtn">
                                    {{ __('Register') }}
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
    .namelabel,.emaillabel,.passwordlabel,.confirmlabel{
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
    .registerbtn{
        border-color: #fff;
        background-color: transparent;
        color: #fff;
        font-size: 16px;
        padding: 5px 20px;
        border-radius: 0;
        box-shadow: none;
    }
    .registerbtn:hover{
        border-radius: 10px;
        transition-duration: 0.2s;
        background-color: transparent;
        color:#fff;
        transition:0.3s;
    }
</style>
<!-- End of Style -->
@endsection
