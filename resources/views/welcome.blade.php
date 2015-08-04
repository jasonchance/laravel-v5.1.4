@extends('layouts.default')
@section('head')
@stop
@section('content')
<div class="container">
  <div class="content">
    <div class="title">Laravel 5</div>
    <div class="title">{{ $count }}</div>
    <div class="title">{{ $userName }}</div>
    <div class="title">=========</div>
	@datetime($nowTime)
    <div class="quote">{{ Inspiring::quote() }}</div>
    <form method="POST">
    {!! method_field('delete') !!}
    {!! csrf_field() !!}
	</form>
  </div>
</div>
@stop
