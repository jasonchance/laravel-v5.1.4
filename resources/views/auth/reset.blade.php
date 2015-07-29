<!-- resources/views/auth/reset.blade.php -->
@extends('layouts.default')
@section('content')
<div class="modal" id="loginpage" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="loginModalLabel">Reset Your Password</h4>
      </div>
      <div class="modal-body">
        <form method="POST" id="reset_form" action="/password/reset">
          {!! csrf_field() !!}
          <input type="hidden" name="token" value="{{ $token }}">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" value="{{$email}}" class="form-control" id="exampleInputEmail1" placeholder="example@somewhere.com" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">New Password</label>
            <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password Confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>

          <div class="row reset-modal-footer">
            <div class="col-md-12">
              <button class="btn btn-red circle pull-right btn-reset">修改密码</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{asset('js/reset.js')}}"></script>
@stop
