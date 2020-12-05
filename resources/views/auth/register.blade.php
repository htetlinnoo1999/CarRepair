@extends('layouts.app')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Car</b>Repair</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="{{route('register')}}" method="post">
        @csrf
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" autocomplete="name" value="{{old('name')}}" placeholder="Full name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong class="text-red">{{ $message }}</strong>
                </span>
            @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong class="text-red">{{ $message }}</strong>
                </span>
            @enderror
      </div>
      
      <div class="form-group has-feedback">
        <input type="tel" class="form-control" @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Phone" required>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong class="text-red">{{ $message }}</strong>
                </span>
            @enderror
      </div>

      <div class="form-group has-feedback">
        <select name="gender" id="gender" class="form-control" required>
            <option selected disabled>Choose your gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <span class=""></span>
            @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong class="text-red">{{ $message }}</strong>
                </span>
            @enderror
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="new-password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong class="text-red">{{ $message }}</strong>
                </span>
            @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password_confirmation" required placeholder="Retype password" autocomplete="new-password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    {{-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div> --}}

    <a href="{{route('login')}}" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
@endsection
