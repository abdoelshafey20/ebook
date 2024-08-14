@extends('layouts.app')

@section('content')


<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">

        

             

            </div>


        </div>
    </div>
</section>


<div class="col-lg-5 col-12 mx-auto">
    <form class="custom-form ebook-download-form bg-white shadow  my-5"  action="{{ route('login') }}" method="post"
        role="form">
        @csrf

        <div class="text-center mb-5">
            <h2 class="mb-1">Login</h2>
        </div>

        <div class="ebook-download-form-body">
            <div class="input-group mb-4">
             


                    <input id="email"    type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="input-group-text" id="basic-addon2">
                        <i class="custom-form-icon bi-envelope"></i>
                    </span>

             
            </div>

            <div class="input-group mb-4">
               

                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="input-group-text" id="basic-addon1">
                        <i class="custom-form-icon bi-eye"></i>
                    </span>
            
            </div>

            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>

            <div class="col-lg-8 col-md-10 col-8 mx-auto my-3">
                <button type="submit" class="form-control">Login</button>
            </div>


            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif

        </div>
    </form>
</div>


@endsection
