@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
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
                                    placeholder="Name..." autofocus>

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
                                    name="user_name" value="{{ old('user_name') }}" placeholder="UserName..." required>

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
                                    required autocomplete="new-password" placeholder="Password...">

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
                                <input id="password-confirm" type="password" class="form-control"
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
