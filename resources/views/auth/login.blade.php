@extends('layouts.app')
@section('title', __('Welcome'))
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="login" class="col-sm-4 col-form-label text-md-right">
                                {{ __('Username or Email') }}
                            </label>

                            <div class="col-md-6">
                                <input id="login" type="text"
                                    class="form-control{{ $errors->has('user_name') || $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="login" value="{{ old('user_name') ?: old('email') }}" required autofocus>

                                @if ($errors->has('user_name') || $errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('user_name') ?: $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

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
</div> -->

  <!-- <div class="wrapper wrapper-full-page"> -->
    <!-- <div class="page-header header-filter" filter-color="black" style="background-image: url({{ asset('img/login.jpg') }}); background-size: cover; background-position: top center;"> -->
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
          <form method="POST" action="{{ route('login') }}">              
          @csrf  
            <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">{{ __('menu.login')}}</h4>
                  <!-- <div class="social-line">
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div> -->
                </div>
                <div class="card-body ">
                  <!-- <p class="card-description text-center">Or Be Classical</p>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="First Name...">
                    </div>
                  </span> -->
                  <span class="bmd-form-group">

                  <!-- <div class="form-group row">
                            <label for="login" class="col-sm-4 col-form-label text-md-right">
                                {{ __('Username or Email') }}
                            </label>

                            <div class="col-md-6">
                                <input id="login" type="text"
                                    class="form-control{{ $errors->has('user_name') || $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="login" value="{{ old('user_name') ?: old('email') }}" required autofocus>

                                @if ($errors->has('user_name') || $errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('user_name') ?: $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div> -->
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input id="login" type="text" placeholder="{{ __('login_register.name_email')}}"
                                    class="form-control{{ $errors->has('user_name') || $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="login" value="{{ old('user_name') ?: old('email') }}" required autofocus>
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input id="password" type="password" placeholder="{{ __('login_register.password')}}"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <!-- <a href="#pablo" class="btn btn-rose btn-link btn-lg">Lets Go</a> -->
                  <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    <!-- </div>
  </!--> -->
@endsection
