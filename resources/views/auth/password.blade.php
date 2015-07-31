<!-- resources/views/auth/login.blade.php -->
@extends('layouts.default')

@section('content')
<div class="modal" id="loginpage" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="loginModalLabel">Reset your password</h4>
      </div>
      <div class="modal-body">
        <form method="POST" id="emailResetForm" action="/password/email">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="example@somewhere.com" value="{{ old('email') }}">
          </div>
          <div class="row reset-modal-footer">
            <div class="col-md-12">
              <button class="btn btn-red circle pull-right btn-reset">发送重置邮件</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{asset('js/emailreset.js')}}"></script>
@stop
