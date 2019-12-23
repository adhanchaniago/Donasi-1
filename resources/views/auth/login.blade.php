@extends('layouts.depan')

@section('content')
    <style type="text/css">
        body {
            color: #fff;
            background: #a133a9;
            font-family: 'Open Sans', sans-serif;
        }
        .form-control {
            min-height: 41px;
            background: #fff;
            border-color: #e3e3e3;
            box-shadow: none !important;
            border-radius: 4px;
        }   
        .form-control:focus {
            border-color: #99c432;
        }
        .login-form {
            width: 380px;
            margin: 0 auto;
            padding: 160px 0 70px;      
        }
        .login-form form {
            color: #999;
            border-radius: 10px;
            margin-bottom: 15px;
            background: #fff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;  
            position: relative; 
        }
        .login-form h2 {        
            font-size: 24px;
            line-height: 2em;
            color: #454959;
            margin: 45px 0 25px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .login-form .avatar {
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -50px;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            z-index: 9;
            background: #eeff75;
            padding: 7px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }
        .login-form .avatar img {
            width: 100%;
            border-radius: 50%;
        }
        .login-form .btn {
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            border: none;
        }
        .login-btn {        
            font-size: 16px;
            font-weight: bold;
            background: #07a9b4;        
            margin-bottom: 20px;
        }
        .login-btn:hover, .login-btn:active {
            background: #ff0000 !important;
        }
        .social-btn {
            padding-bottom: 15px;
        }
        .social-btn .btn {      
            margin-bottom: 10px;
            font-size: 14px;
            text-align: left;
        }   
        .social-btn .btn:hover {
            opacity: 0.8;
            text-decoration: none;
        }   
        .social-btn .btn-primary {
            background: #507cc0;
        }
        .social-btn .btn-info {
            background: #64ccf1;
        }
        .social-btn .btn-danger {
            background: #df4930;
        }
        .social-btn .btn i {
            float: left;
            margin: 1px 10px 0 5px;
            min-width: 20px;
            font-size: 18px;
        }
        .or-seperator {
            height: 0;
            margin: 0 auto 20px;
            text-align: center;
            border-top: 1px solid #e0e0e0;
            width: 30%;
        }
        .or-seperator i {
            padding: 0 10px;
            font-size: 15px;
            text-align: center;
            background: #fff;
            display: inline-block;
            position: relative;
            top: -13px;
            z-index: 1;
        }
        .login-form a {
            color: #fff;
            text-decoration: underline;
        }
        .login-form form a {
            color: #999;
            text-decoration: none;
        }   
        .login-form a:hover, .login-form form a:hover {
            text-decoration: none;
        }
        .login-form form a:hover {
            text-decoration: underline;
        }
    </style>

  <div class="login-form">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="avatar">
            <img src="{{ asset('img/avatar.png') }}" alt="Avatar" />
        </div>
        <h2 class="text-center"><b>Lapak Doa</b></h2>
        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">     
        </div>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required"> 
        </div>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Sign in</button>
        </div>
        <p class="text-center small">Version 1.11.13</p>
        @if (Route::has('password.request'))
        <a class="text-center small" href="{{ route('password.request') }}" style="color:cornflowerblue">
            {{ __('Forgot Your Password?') }}
        </a>
        @endif
    </form>
    
    <!-- <p class="text-center small">Don't have an account? <a href="#">Sign up here!</a></p> -->
</div>

@endsection