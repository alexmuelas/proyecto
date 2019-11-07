@extends('layouts.app')
@section('title', __('Login'))
@section('content')

      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
          <form method="POST" action="{{ route('login') }}">              
          @csrf  
            <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">{{ __('menu.login')}}</h4>
                  
                </div>
                <div class="card-body ">
                 
                  <span class="bmd-form-group">

               
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input id="login" type="text" placeholder="{{ __('login_register.name_email')}}"
                                    class="form-control{{ $errors->has('user_name') || $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="login" value="{{ old('login') }}"  required autofocus>
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
