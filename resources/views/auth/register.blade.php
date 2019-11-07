@extends('layouts.app')

@section('title', __('menu.register'))

@section('content')

<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-4">
        
            <div class="card">
            <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">{{ __('menu.register')}}</h4>
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
               
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group has-default">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">face</i>
                                </span>
                            </div>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                    placeholder="{{ __('login_register.name')}}" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>



                    <div class="form-group has-default">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">face</i>
                                </span>
                            </div>


                            <div class="col-md-8">
                                <input id="user_name" type="text"
                                    class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}"
                                    name="user_name" value="{{ old('user_name') }}" placeholder="User Name..." required>

                                @if ($errors->has('user_name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('user_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group has-default">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">sports_soccer</i>
                                </span>
                            </div>
                            <div class="col-md-8">
                                <input id="name_myteam" type="text"
                                    class="form-control @error('name_myteam') is-invalid @enderror" name="name_myteam"
                                    required autocomplete="new-name_myteam" value="{{ old('name_myteam') }}" placeholder="{{ __('menu.name_myteam')}}">

                                @error('name_myteam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>




                    <div class="form-group has-default">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">mail</i>
                                </span>
                            </div>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email...">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="form-group has-default">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                            </div>
                            <div class="col-md-8">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password" placeholder="{{ __('login_register.password')}}">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group has-default">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                            </div>
                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" placeholder="{{ __('login_register.password2')}}"
                                    name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password...">
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>


            </div>
        </div>

    </div>
</div>
@endsection
