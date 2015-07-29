<!-- resources/views/auth/login.blade.php -->
@extends('layouts.default')

@section('content')

@if(session('message'))
<div class="alert alert-info center" id="message">
{{session('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if(Session::get('faillogincount')>3)
<div class="modal" id="loginpage" tabindex="-1" role="dialog" aria-labelledby="warnLoginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title modal-warn" id="warnLoginModalLabel">Login with your email account</h4>
      </div>

      <div class="modal-body">
        <form  method="POST" action="{!! URL('login') !!}">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="example@somewhere.com">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
          </div>

          <div class="form-group">
            <label for="verify">Input the text contained in image</label>
            <div class="row">
              <div class="col-md-8">
                <input type="text" class="form-control" name="captcha" id="verify" placeholder="">
              </div>
              <div class="col-md-4">
                <img src="{{$captchaurl}}">
              </div>
            </div>
          </div>

          <div class="row clearfix">
            <div class="checkbox remember pull-left modal-warn">
              <label>
                <input type="checkbox" name="remember"> Remember me
              </label>
            </div>
            <div class="forget pull-right modal-warn">
              <a href="{!! URL::to('/password/email') !!}">Forgot your password?</a>
            </div>
          </div>

          <div class="row modal-footer">
            <div class="col-md-6">
              <button type="submit" class="btn btn-red circle pull-right btn-login">Login</button>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-primary circle pull-left btn-cancel" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@else
<div class="modal" id="loginpage" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="loginModalLabel">Login with your email account</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="{!! URL('login') !!}">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="example@somewhere.com">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="row clearfix">
            <div class="checkbox remember pull-left">
              <label>
                <input type="checkbox" name="remember"> Remember me
              </label>
            </div>
            <div class="forget pull-right">
              <a href="{!! URL::to('/password/email') !!}">Forgot your password?</a>
            </div>
          </div>
          <div class="row modal-footer">
            <div class="col-md-6">
              <button type="submit" class="btn btn-red circle pull-right btn-login">Login</button>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-primary circle pull-left btn-cancel" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endif
@stop
